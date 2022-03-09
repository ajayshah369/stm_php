<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendQuotation;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    //
    public function home () {
        return view('admin.home');
    }

    public function quotation () {
        return view('admin.quotation');
    }

    public function make_quotation (Request $request) {
        unset($request['_token']);
        unset($request['_save']);

        // return $request;

        // return view('emails.quotation', ['data' => $request]);

        \Mail::to(array($request->email, 'mail@shivamcargo.com'))->send(new SendQuotation($request));

        return view('admin.quotation_sent');
    }

    public function aboutus () {
        $about_us = DB::select('select * from about_us')[0];
        return view('admin.aboutus', ['about_us' => $about_us]);
    }

    public function post_aboutus (Request $request) {
        unset($request['_token']);
        unset($request['_save']);

        $data = array();

        if ($request->file('small_image')) {
            $fileName = 'small_image' . '.' . $request->file('small_image')->extension();
            $filepath = $request->file('small_image')->storeAs('about_us', $fileName);
            $data['small_image'] = $filepath;
        }

        if ($request->file('vision_image')) {
            $fileName = 'vision_image' . '.' . $request->file('vision_image')->extension();
            $filepath = $request->file('vision_image')->storeAs('about_us', $fileName);
            $data['vision_image'] = $filepath;
        }

        if ($request->file('mission_image')) {
            $fileName = 'mission_image' . '.' . $request->file('mission_image')->extension();
            $filepath = $request->file('mission_image')->storeAs('about_us', $fileName);
            $data['mission_image'] = $filepath;
        }

        if ($request->file('our_team_image')) {
            $fileName = 'our_team_image' . '.' . $request->file('our_team_image')->extension();
            $filepath = $request->file('our_team_image')->storeAs('about_us', $fileName);
            $data['our_team_image'] = $filepath;
        }

        unset($request['small_image']);
        unset($request['our_vision_image']);
        unset($request['our_mission_image']);
        unset($request['our_team_image']);

        foreach ($request->input() as $key => $value) {
            if ($key == 'id') {
                continue;
            }
            $data[$key] = $value;
        }

        // return $data;

        DB::table('about_us')->where('id', $request->input('id'))->update($data);

        return redirect('/admin/home');
    }

    public function achievements() {
        $achievements = DB::select('select * from achievements order by date desc');
        return view('admin.achievements', ['achievements' => $achievements]);
    }

    public function add_achievement() {
        return view('admin.add_achievement');
    }

    public function post_add_achievement(Request $request) {
        $data = array();
        $data['t'] = $request->input('t');

        if ($request->file('image')) {
            $filepath = $request->file('image')->store('achievements');
            $data['image'] = $filepath;
        }

        DB::table('achievements')->insert($data);

        return redirect('/admin/achievements');
    }

    public function achievement(Request $request) {
        $x = DB::select('select * from achievements where id = ?', [$request->id]);
        if (count($x) == 0) {
            abort(404);
        }
        $achievement = $x[0];
        return view('admin.achievement', ['achievement' => $achievement]);
    }

    public function delete_achievement(Request $request) {
        DB::table('achievements')->where('id', $request->id)->delete();
        return redirect('/admin/achievements');
    }

    public function m_achievement(Request $request) {
        $data = array();
        $data['t'] = $request->input('t');
        if ($request->file('image')) {
            $filepath = $request->file('image')->store('achievements');
            $data['image'] = $filepath;
        }

        DB::table('achievements')->where('id', $request->id)->update($data);

        return redirect('/admin/achievements');
    }

    public function big_images(Request $request) {
        $big_images = DB::select('select * from big_images');
        return view('admin.big_images', ['big_images' => $big_images]);
    }

    public function add_big_image() {
        return view('admin.add_big_image');
    }

    public function post_add_big_image() {
        $data = array();
        $data['title'] = request()->input('title');
        if (request()->file('image')) {
            $filepath = request()->file('image')->store('big_images');
            $data['image'] = $filepath;
        }
        DB::table('big_images')->insert($data);
        return redirect('/admin/bigimages');;
    }

    public function big_image(Request $request) {
        $x = DB::select('select * from big_images where id = ?', [$request->id]);
        if (count($x) == 0) {
            abort(404);
        }
        $big_image = $x[0];
        return view('admin.big_image', ['big_image' => $big_image]);
    }

    public function m_big_image(Request $request) {
        $data = array();
        $data['title'] = $request->input('title');
        if ($request->file('image')) {
            $filepath = $request->file('image')->store('big_images');
            $data['image'] = $filepath;
        }
        DB::table('big_images')->where('id', $request->id)->update($data);
        return redirect('/admin/bigimages');
    }

    public function delete_big_image(Request $request) {
        DB::table('big_images')->where('id', $request->id)->delete();
        return redirect('/admin/bigimages');
    }

    public function blogs() {
        $blogs = DB::select('select * from blogs');
        return view('admin.blogs', ['blogs' => $blogs]);
    }

    public function blog(Request $request) {
        $x = DB::select('select * from blogs where id = ?', [$request->id]);
        if (count($x) == 0) {
            abort(404);
        }
        $blog = $x[0];

        return view('admin.blog', ['blog' => $blog]);
    }

    public function add_blog() {
        return view('admin.add_blog');
    }

    public function post_add_blog(Request $request) {
        $data = array();
        $data['title'] = request()->input('title');
        $data['slug'] = request()->input('slug');
        $data['p'] = request()->input('p');
        $data['seo_title'] = request()->input('seo_title');
        $data['seo_description'] = request()->input('seo_description');
        $data['seo_keywords'] = request()->input('seo_keywords');
        $data['seo_property_title'] = request()->input('seo_property_title');
        $data['seo_property_description'] = request()->input('seo_property_description');
        $data['seo_property_keywords'] = request()->input('seo_property_keywords');
        $data['seo_twitter_title'] = request()->input('seo_twitter_title');
        $data['seo_twitter_description'] = request()->input('seo_twitter_description');
        $data['seo_twitter_keywords'] = request()->input('seo_twitter_keywords');

        if ($request->file('image')) {
            $filepath = $request->file('image')->store('blogs');
            $data['image'] = $filepath;
        }

        DB::table('blogs')->insert($data);
        return redirect('/admin/blogs');
    }

    public function delete_blog(Request $request) {
        DB::table('blogs')->where('id', $request->id)->delete();
        return redirect('/admin/blogs');
    }

    public function m_blog(Request $request) {
        $data = array();
        $data['title'] = $request->input('title');
        $data['slug'] = $request->input('slug');
        $data['p'] = $request->input('p');
        if($request->file('image')){
            $filepath = $request->file('image')->store('blogs');
            $data['image'] = $filepath;
        }
        DB::table('blogs')->where('id', $request->id)->update($data);
        return redirect('/admin/blogs');
    }

    public function branches() {
        $branches = DB::select('select * from branches order by title');
        return view('admin.branches', ['branches' => $branches]);
    }

    public function branch(Request $request) {
        $x = DB::select('select * from branches where id = ?', [$request->id]);
        if (count($x) == 0) {
            abort(404);
        }
        $branch = $x[0];
        return view('admin.branch', ['branch' => $branch]);
    }

    public function m_branch(Request $request) {
        $data = array();
        $data['title'] = request()->input('title');
        $data['slug'] = request()->input('slug');
        $data['address'] = request()->input('address');
        $data['p'] = request()->input('p');
        $data['map'] = request()->input('map');
        $data['phone_one'] = request()->input('phone_one');
        $data['phone_two'] = request()->input('phone_two');
        $data['phone_three'] = request()->input('phone_three');
        $data['phone_four'] = request()->input('phone_four');
        $data['phone_five'] = request()->input('phone_five');
        $data['email_one'] = request()->input('email_one');
        $data['email_two'] = request()->input('email_two');
        $data['seo_title'] = request()->input('seo_title');
        $data['seo_description'] = request()->input('seo_description');
        $data['seo_keywords'] = request()->input('seo_keywords');
        $data['seo_property_title'] = request()->input('seo_property_title');
        $data['seo_property_description'] = request()->input('seo_property_description');
        $data['seo_property_keywords'] = request()->input('seo_property_keywords');
        $data['seo_twitter_title'] = request()->input('seo_twitter_title');
        $data['seo_twitter_description'] = request()->input('seo_twitter_description');
        $data['seo_twitter_keywords'] = request()->input('seo_twitter_keywords');

        DB::table('branches')->where('id', $request->id)->update($data);
        return redirect('/admin/branches');
    }

    public function delete_branch(Request $request) {
        DB::table('branches')->where('id', $request->id)->delete();
        return redirect('/admin/branches');
    }

    public function add_branch() {
        return view('admin.add_branch');
    }

    public function post_add_branch() {
        $data = array();
        $data['title'] = request()->input('title');
        $data['slug'] = request()->input('slug');
        $data['address'] = request()->input('address');
        $data['p'] = request()->input('p');
        $data['map'] = request()->input('map');
        $data['phone_one'] = request()->input('phone_one');
        $data['phone_two'] = request()->input('phone_two');
        $data['phone_three'] = request()->input('phone_three');
        $data['phone_four'] = request()->input('phone_four');
        $data['phone_five'] = request()->input('phone_five');
        $data['email_one'] = request()->input('email_one');
        $data['email_two'] = request()->input('email_two');
        $data['seo_title'] = request()->input('seo_title');
        $data['seo_description'] = request()->input('seo_description');
        $data['seo_keywords'] = request()->input('seo_keywords');
        $data['seo_property_title'] = request()->input('seo_property_title');
        $data['seo_property_description'] = request()->input('seo_property_description');
        $data['seo_property_keywords'] = request()->input('seo_property_keywords');
        $data['seo_twitter_title'] = request()->input('seo_twitter_title');
        $data['seo_twitter_description'] = request()->input('seo_twitter_description');
        $data['seo_twitter_keywords'] = request()->input('seo_twitter_keywords');

        DB::table('branches')->insert($data);
        return redirect('/admin/branches');
    }

    public function call_back_requests() {
        $call_back_requests = DB::select('select * from call_back_requests order by date desc');
        return view('admin.call_back_requests', ['call_back_requests' => $call_back_requests]);
    }

    public function call_back_request(Request $request) {
        $x = DB::select('select * from call_back_requests where id = ?', [$request->id]);
        if (count($x) == 0) {
            abort(404);
        }
        $call_back_request = $x[0];
        return view('admin.call_back_request', ['call_back_request' => $call_back_request]);
    }

    public function delete_call_back_request(Request $request) {
        DB::table('call_back_requests')->where('id', $request->id)->delete();
        return redirect('/admin/callbackrequests');
    }

    public function contact_us() {
        $contact_us = DB::select('select * from contact_us')[0];
        return view('admin.contact_us', ['contact_us' => $contact_us]);
    }

    public function m_contact_us(Request $request) {
        $data = array();
        $data['address'] = request()->input('address');
        $data['phone_one'] = request()->input('phone_one');
        $data['phone_two'] = request()->input('phone_two');
        $data['phone_three'] = request()->input('phone_three');
        $data['phone_four'] = request()->input('phone_four');
        $data['phone_five'] = request()->input('phone_five');
        $data['email_one'] = request()->input('email_one');
        $data['email_two'] = request()->input('email_two');
        $data['call'] = request()->input('call');
        $data['email'] = request()->input('email');
        $data['whatsapp'] = request()->input('whatsapp');
        $data['facebook'] = request()->input('facebook');
        $data['twitter'] = request()->input('twitter');
        $data['instagram'] = request()->input('instagram');
        $data['linkedin'] = request()->input('linkedin');

        if (request()->file('address_image')) {
            $filepath = request()->file('address_image')->store('contact_us');
            $data['address_image'] = $filepath;
        }
        if (request()->file('call_image')) {
            $filepath = request()->file('call_image')->store('contact_us');
            $data['call_image'] = $filepath;
        }
        if (request()->file('email_image')) {
            $filepath = request()->file('email_image')->store('contact_us');
            $data['email_image'] = $filepath;
        }
        
                DB::table('contact_us')->where('id', $request->id)->update($data);
        return redirect('/admin/home');
    }

    public function gallery () {
        $gallery = DB::select('select * from gallery order by date desc');

        return view('admin.gallery', ['galleries' => $gallery]);
    }

    public function gall(Request $request) {
        $gall = DB::select('select * from gallery where id = ?', [$request->id]);
        if(count($gall) == 0) {
            abort(404);
        }
        return view('admin.gall', ['gall' => $gall[0]]);
    }

    public function add_gall(Request $request) {
        return view('admin.add_gall');
    }

    public function post_add_gall(Request $request) {
        $data = array();
        $data['title'] = request()->input('title');


        if (request()->file('media')) {
            $filepath = request()->file('media')->store('gallery');
            $extension = request()->file('media')->extension();
            if ($extension == 'jpg' or $extension == 'png' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'webp' or $extension == 'svg'){
                $data['t'] = 'image';
            }else {
                $data['t'] = 'video';
            }
            $data['media'] = $filepath;
        }

        DB::table('gallery')->insert($data);
        return redirect('/admin/gallery');
    }

    public function delete_gall(Request $request) {
        DB::table('gallery')->where('id', $request->id)->delete();
        return redirect('/admin/gallery');
    }

    public function m_gall(Request $request) {
        $data = array();
        $data['title'] = request()->input('title');

        if (request()->file('media')) {
            $filepath = request()->file('media')->store('gallery');
            $extension = request()->file('media')->extension();
            if ($extension == 'jpg' or $extension == 'png' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'webp' or $extension == 'svg'){
                $data['t'] = 'image';
            }else {
                $data['t'] = 'video';
            }
            $data['media'] = $filepath;
        }

        DB::table('gallery')->where('id', $request->id)->update($data);
        return redirect('/admin/gallery');
    }

    public function inquiries() {
        $inquiries = DB::select('select * from inquiries order by date desc');
        return view('admin.inquiries', ['inquiries' => $inquiries]);
    }

    public function inquiry(Request $request) {
        $form_inputs = array(
		array('name' => 'company_name', 'label' => 'Company Name'),
		array('name' => 'person_name', 'label' => 'Person Name'),
		array('name' => 'mobile_number', 'label' => 'Mobile Number'),
		array('name' => 'email', 'label' => 'Email'),
		array('name' => 'packing_date', 'label' => 'Packing Date'),
		array('name' => 'address', 'label' => 'Address'),
		array('name' => 'city', 'label' => 'City'),
		array('name' => 'state', 'label' => 'State'),
		array('name' => 'moving_from', 'label' => 'Moving From'),
		array('name' => 'moving_to', 'label' => 'Moving To'),
		array('name' => 'services', 'label' => 'Services'),
		array('name' => 'freeze_165_280', 'label' => 'Freeze 165 280'),
		array('name' => 'freeze_320_400', 'label' => 'Freeze 320 400'),
		array('name' => 'tv_big', 'label' => 'Tv Big'),
		array('name' => 'tv_small', 'label' => 'Tv Small'),
		array('name' => 'washing_machine', 'label' => 'Washing Machine'),
		array('name' => 'cooking_range', 'label' => 'Cooking Range'),
		array('name' => 'micro_oven', 'label' => 'Micro Oven'),
		array('name' => 'microwave', 'label' => 'Microwave'),
		array('name' => 'air_conditioner', 'label' => 'Air Conditioner'),
		array('name' => 'air_con', 'label' => 'Air Con'),
		array('name' => 'cooler', 'label' => 'Cooler'),
		array('name' => 'fan', 'label' => 'Fan'),
		array('name' => 'almirah_wooden_big', 'label' => 'Almirah Wooden Big'),
		array('name' => 'almirah_wooden_small', 'label' => 'Almirah Wooden Small'),
		array('name' => 'almirah_steel_big', 'label' => 'Almirah Steel Big'),
		array('name' => 'almirah_steel_small', 'label' => 'Almirah Steel Small'),
		array('name' => 'sofa_set', 'label' => 'Sofa Set'),
		array('name' => 'dining_table', 'label' => 'Dining Table'),
		array('name' => 'double_bed_dism', 'label' => 'Double Bed Dism'),
		array('name' => 'double_bed_box_type', 'label' => 'Double Bed Box Type'),
		array('name' => 'side_stool', 'label' => 'Side Stool'),
		array('name' => 'dewan', 'label' => 'Dewan'),
		array('name' => 'single_cot', 'label' => 'Single Cot'),
		array('name' => 'mattress', 'label' => 'Mattress'),
		array('name' => 'center_table', 'label' => 'Center Table'),
		array('name' => 'grinder', 'label' => 'Grinder'),
		array('name' => 'music_system', 'label' => 'Music System'),
		array('name' => 'cabinet_small', 'label' => 'Cabinet Small'),
		array('name' => 'cabinet_big', 'label' => 'Cabinet Big'),
		array('name' => 'showcase_small', 'label' => 'Showcase Small'),
		array('name' => 'showcase_big', 'label' => 'Showcase Big'),
		array('name' => 'wall_unit_small', 'label' => 'Wall Unit Small'),
		array('name' => 'wall_unit_big', 'label' => 'Wall Unit Big'),
		array('name' => 'writing_table', 'label' => 'Writing Table'),
		array('name' => 'Study_table', 'label' => 'Study Table'),
		array('name' => 'dressing_table', 'label' => 'Dressing Table'),
		array('name' => 'folding_chair', 'label' => 'Folding Chair'),
		array('name' => 'cot', 'label' => 'Cot'),
		array('name' => 'plastic_chair', 'label' => 'Plastic Chair'),
		array('name' => 'wooden_chair', 'label' => 'Wooden Chair'),
		array('name' => 'computer_system', 'label' => 'Computer System'),
		array('name' => 'computer_table', 'label' => 'Computer Table'),
		array('name' => 'chair', 'label' => 'Chair'),
		array('name' => 'tv_trolley', 'label' => 'Tv Trolley'),
		array('name' => 'cabinet', 'label' => 'Cabinet'),
		array('name' => 'chest_of_drawer', 'label' => 'Chest Of Drawer'),
		array('name' => 'geyser', 'label' => 'Geyser'),
		array('name' => 'exhaust_fan', 'label' => 'Exhaust Fan'),
		array('name' => 'ceiling_fan', 'label' => 'Ceiling Fan'),
		array('name' => 'table_fan', 'label' => 'Table Fan'),
		array('name' => 'vaccum_cleaner', 'label' => 'Vaccum Cleaner'),
		array('name' => 'jhulla_small', 'label' => 'Jhulla Small'),
		array('name' => 'jhulla_big', 'label' => 'Jhulla Big'),
		array('name' => 'rolling_chair', 'label' => 'Rolling Chair'),
		array('name' => 'steel_trunks', 'label' => 'Steel Trunks'),
		array('name' => 'steel_boxes', 'label' => 'Steel Boxes'),
		array('name' => 'water_drums', 'label' => 'Water Drums'),
		array('name' => 'tube_light', 'label' => 'Tube Light'),
		array('name' => 'suitcase', 'label' => 'Suitcase'),
		array('name' => 'sewing_machine', 'label' => 'Sewing Machine'),
		array('name' => 'plastic', 'label' => 'Plastic'),
		array('name' => 'basket', 'label' => 'Basket'),
		array('name' => 'kitchen_rack', 'label' => 'Kitchen Rack'),
		array('name' => 'book_rack', 'label' => 'Book Rack'),
		array('name' => 'wall_frames', 'label' => 'Wall Frames'),
		array('name' => 'photos', 'label' => 'Photos'),
		array('name' => 'book_shelf', 'label' => 'Book Shelf'),
		array('name' => 'clothes', 'label' => 'Clothes'),
		array('name' => 'utensils', 'label' => 'Utensils'),
		array('name' => 'crockery', 'label' => 'Crockery'),
		array('name' => 'gas_stove', 'label' => 'Gas Stove'),
		array('name' => 'misc', 'label' => 'Misc'),
		array('name' => 'show_pieces', 'label' => 'Show Pieces'),
		array('name' => 'toys', 'label' => 'Toys'),
		array('name' => 'carpets', 'label' => 'Carpets'),
		array('name' => 'pots', 'label' => 'Pots'),
		array('name' => 'baby_cycle', 'label' => 'Baby Cycle'),
		array('name' => 'others', 'label' => 'Others'),
		array('name' => 'scooter', 'label' => 'Scooter'),
		array('name' => 'motor_cycle', 'label' => 'Motor Cycle'),
		array('name' => 'car', 'label' => 'Car'),
		array('name' => 'wooden_temple', 'label' => 'Wooden Temple'),
		array('name' => 'stone_temple', 'label' => 'Stone Temple'),
		array('name' => 'tipol', 'label' => 'Tipol'),
		array('name' => 'shoes_rack_big', 'label' => 'Shoes Rack Big'),
		array('name' => 'shoes_rack_small', 'label' => 'Shoes Rack Small'),
		array('name' => 'stool', 'label' => 'Stool'),
		array('name' => 'aquaguard', 'label' => 'Aquaguard'),
		array('name' => 'ro', 'label' => 'Ro'),
		array('name' => 'exercise_cycle', 'label' => 'Exercise Cycle'),
		array('name' => 'corner', 'label' => 'Corner'),
		array('name' => 'ata_maker', 'label' => 'Ata Maker'),
		array('name' => 'zumar', 'label' => 'Zumar'),
		array('name' => 'Fish_plant', 'label' => 'Fish Plant'),
		array('name' => 'iron_stand', 'label' => 'Iron Stand'),
		array('name' => 'clothe_stand', 'label' => 'Clothe Stand'),
		array('name' => 'other_items', 'label' => 'Other Items'),
	);
        $x = DB::select('select * from inquiries where id = ?', [$request->id]);
        if (count($x) == 0) {
            abort(404);
        }
        $inquiry = $x[0];
        $services = DB::select('select * from services');

        for ($i=0; $i < count($form_inputs); $i++) { 
            $form_inputs[$i]['value'] = $inquiry->{$form_inputs[$i]['name']};
        }

        return view('admin.inquiry', ['services' => $services, 'form_inputs' => $form_inputs, 'id' => $request->id]);
    }

    public function delete_inquiry(Request $request) {
        DB::table('inquiries')->where('id', $request->id)->delete();
        return redirect('/admin/inquiries');
    }

    public function quick_inquiries() {
        $inquiries = DB::select('select * from quick_inquiries');
        return view('admin.quick_inquiries', ['inquiries' => $inquiries]);
    }

    public function quick_inquiry(Request $request) {
        $inquiry = DB::select('select * from quick_inquiries where id = ?', [$request->id]);
        if (count($inquiry) == 0) {
            abort(404);
        }

        return view('admin.quick_inquiry', ['inquiry' => $inquiry[0]]);
    }

    public function delete_quick_inquiry(Request $request) {
        DB::table('quick_inquiries')->where('id', $request->id)->delete();
        return redirect('/admin/quickinquiries');
    }

    public function seos() {
        $seos = DB::select('select * from seo');

        return view('admin.seos', ['seos' => $seos]);
    }

    public function seo(Request $request) {
        $seo = DB::select('select * from seo where id = ?', [$request->id]);

        if (count($seo) == 0) {
            abort(404);
        }

        return view('admin.seo', ['seo' => $seo[0]]);
    }

    public function m_seo(Request $request) {
        $data = array();

        $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['keywords'] = $request->input('keywords');
        $data['property_title'] = $request->input('property_title');
        $data['property_description'] = $request->input('property_description');
        $data['property_keywords'] = $request->input('property_keywords');
        $data['twitter_title'] = $request->input('twitter_title');
        $data['twitter_description'] = $request->input('twitter_description');
        $data['twitter_keywords'] = $request->input('twitter_keywords');

        DB::table('seo')->where('id', $request->id)->update($data);
        return redirect('/admin/seo');
    }

    public function services() {
        $services = DB::select('select * from services');

        return view('admin.services', ['services' => $services]);
    }

    public function add_service() {
        return view('admin.add_service');
    }

    public function post_add_service(Request $request) {
        $data = array();

        $data['title'] = $request->input('title');
        $data['slug'] = $request->input('slug');
        $data['p1'] = $request->input('p1');
        $data['p2'] = $request->input('p2');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_description'] = $request->input('seo_description');
        $data['seo_keywords'] = $request->input('seo_keywords');
        $data['seo_property_title'] = $request->input('seo_property_title');
        $data['seo_property_description'] = $request->input('seo_property_description');
        $data['seo_property_keywords'] = $request->input('seo_property_keywords');
        $data['seo_twitter_title'] = $request->input('seo_twitter_title');
        $data['seo_twitter_description'] = $request->input('seo_twitter_description');
        $data['seo_twitter_keywords'] = $request->input('seo_twitter_keywords');

        if (request()->file('image_one')) {
            $filepath = request()->file('image_one')->store('services');
            $data['image_one'] = $filepath;
        }

        if (request()->file('image_two')) {
            $filepath = request()->file('image_two')->store('services');
            $data['image_two'] = $filepath;
        }

        if (request()->file('media_one')) {
            $filepath = request()->file('media_one')->store('services');
            $data['media_one'] = $filepath;
        }

        if (request()->file('media_two')) {
            $filepath = request()->file('media_two')->store('services');
            $data['media_two'] = $filepath;
        }

        if (request()->highlight) {
            $data['highlight'] = $request->input('highlight');
        }

        DB::table('services')->insert($data);

        return redirect('/admin/services');

    }

    public function service (Request $request) {
        $service = DB::select('select * from services where id = ?', [$request->id]);

        if (count($service) == 0) {
            abort(404);
        }

        return view('admin.service', ['service' => $service[0]]);
    }

    public function m_service(Request $request) {
        $data = array();

        $data['title'] = $request->input('title');
        $data['slug'] = $request->input('slug');
        $data['p1'] = $request->input('p1');
        $data['p2'] = $request->input('p2');
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_description'] = $request->input('seo_description');
        $data['seo_keywords'] = $request->input('seo_keywords');
        $data['seo_property_title'] = $request->input('seo_property_title');
        $data['seo_property_description'] = $request->input('seo_property_description');
        $data['seo_property_keywords'] = $request->input('seo_property_keywords');
        $data['seo_twitter_title'] = $request->input('seo_twitter_title');
        $data['seo_twitter_description'] = $request->input('seo_twitter_description');
        $data['seo_twitter_keywords'] = $request->input('seo_twitter_keywords');

        if (request()->file('image_one')) {
            $filepath = request()->file('image_one')->store('services');
            $data['image_one'] = $filepath;
        }

        if (request()->file('image_two')) {
            $filepath = request()->file('image_two')->store('services');
            $data['image_two'] = $filepath;
        }

        if (request()->file('media_one')) {
            $filepath = request()->file('media_one')->store('services');
            $data['media_one'] = $filepath;
        }

        if (request()->file('media_two')) {
            $filepath = request()->file('media_two')->store('services');
            $data['media_two'] = $filepath;
        }

        if (request()->highlight) {
            $data['highlight'] = $request->input('highlight');
        }

        DB::table('services')->where('id', $request->id)->update($data);
        return redirect('/admin/services');

    }

    public function delete_service(Request $request) {
        DB::table('services')->where('id', $request->id)->delete();

                return redirect('/admin/services');

    }

}
