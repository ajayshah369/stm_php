<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Mail\ConsignmentM;

class Consignment extends Controller
{
    //
    public function home(Request $request) {
        $limit = 10;
        $page = 1;
        if ($request->has('page')) {
            $page = $request->page;
        }
        $offset = ($page - 1) * $limit;

        $where = '';
        if ($request->has('dateFrom') && $request->has('dateTo') && $request->dateFrom != null && $request->dateTo != null) {
            $where = 'created_at BETWEEN "'.$request->dateFrom.'" AND "'.$request->dateTo.'"';
        } else if ($request->has('dateFrom') && $request->dateFrom != null) {
            $where = 'created_at >= "'.$request->dateFrom.'"';
        } else if ($request->has('dateTo') && $request->dateTo != null) {
            $where = 'created_at <= "'.$request->dateTo.'"';
        }

        $count;
        $consignments;
    
        if ($where != '') {
            $count = DB::select('select id from consignments where '.$where);
            $consignments = DB::select('select * from consignments where '.$where.' order by created_at desc limit '.$limit.' offset '.$offset);
        } else {
            $count = DB::table('consignments')->get();
            $consignments = DB::table('consignments')->orderBy('created_at', 'desc')->offset($offset)->limit($limit)->get();
        }

        foreach ($consignments as $consignment) {
            $consignment->check_points = unserialize($consignment->check_points);
        }

        $pages = ceil(count($count) / $limit);

        return view('consignment.home', ['active' => 'home', 'consignments' => $consignments, 'pages' => $pages, 'page' => $page]);
    }

    public function create() {
        return view('consignment.create', ['active' => 'create']);
    }

    public function post_create(Request $request) {
        $data = array();
        $data['consignment_number'] = Str::uuid()->toString();
        $data['person_name'] = $request->input('person_name');
        $data['person_email'] = $request->input('person_email');
        $data['truck_number'] = $request->input('truck_number');
        $data['estimate_delievery'] = $request->input('estimate_delievery');
        $data['check_points'] = serialize(array($request->input('check_points')));

        $d = DB::table('consignments')->insert($data);

        \Mail::to(array(env('MAIL_TO'), $data['person_email']))->send(new ConsignmentM($data));

        return redirect('/consignments/home');
    }

    public function get_consignment(Request $request)
    {
        $consignment = DB::table('consignments')->where('id', $request->id)->get();
        if (count($consignment) == 0) {
            abort(404);
        }
        $consignment = $consignment[0];
        $consignment->check_points = unserialize($consignment->check_points);
        return view('consignment.consignment', ['active' => ' ', 'consignment' => $consignment]);
    }

    public function post_consignment(Request $request) {
        $data = array();
        $consignment = DB::select('select check_points from consignments where id = ?', [$request->id]);
        if (count($consignment) == 0) {
            abort(404);
        }
        $consignment = $consignment[0];

        $data['check_points'] = unserialize($consignment->check_points);
        array_push($data['check_points'], $request->input('check_points'));
        $data['status'] = $request->input('status');
        $data['check_points'] = serialize($data['check_points']);
        if($data['status'] == 'completed') {
            $data['completed_at'] = date("Y-m-d");
        }

        DB::table('consignments')->where('id', $request->id)->update($data);

        return redirect('/consignments/'.$request->id);
    }

    public function delete_consignment(Request $request) {
        DB::table('consignments')->where('id', $request->id)->delete();

        return redirect('/consignments/home');
    }

    public function track() {
        return view('consignment.track');
    }

    public function track_consignment(Request $request) {
        $not_found = false;
        $consignment = DB::table('consignments')->where('consignment_number', $request->consignment_number)->get();
        if (count($consignment) == 0) {
            $not_found = true;
            return view('consignment.track-c', ['not_found' => $not_found]);
        }
        $consignment = $consignment[0];
        $consignment->check_points = unserialize($consignment->check_points);
        return view('consignment.track-c', ['consignment' => $consignment, 'not_found' => $not_found]);
    }
}
