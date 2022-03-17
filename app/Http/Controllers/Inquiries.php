<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\CBR;
use App\Mail\QI;
use App\Mail\I;

class Inquiries extends Controller
{

    public function quick_inquiry(Request $request) {
        $name = $request->input('name');
        $phone_number = $request->input('phone_number');
        $email = $request->input('email');
        $moving_from = $request->input('moving_from');
        $moving_to = $request->input('moving_to');
        $query = $request->input('query');

        $data = array('name' => $name, 'phone_number' => $phone_number, 'email' => $email, 'moving_from' => $moving_from, 'moving_to' => $moving_to, 'query' => $query);
        // DB::table('quick_inquiries')->insert($data);

				\Mail::to(array(env('MAIL_TO')))->send(new QI($data));

        return response()->json([
            'status' => 'success',
            'message' => 'Your query has been submitted successfully.'
        ]);
    }

    public function call_back_request(Request $request) {
        $phone_number = $request->input('phone_number');
        if ($phone_number != '') {
					//  DB::table('call_back_requests')->insert(['phone_number' => $phone_number]);

					\Mail::to(array(env('MAIL_TO')))->send(new CBR($request));

				}


        return response()->json([
            'status' => 'success',
            'message' => 'Your request has been submitted successfully.'
        ]);
    }

    public function get_inquiry_us(Request $request) {
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

    $services = DB::select('select * from services');
    $contact = DB::select('select * from contact_us')[0];
    $seo = DB::select('select * from seo where page="inquiry-us"')[0];

    $errors = array();

    return view('pages.inquiry_us', ['form_inputs' => $form_inputs, 'services' => $services, 'contact' => $contact, 'active' => 'inquiry-us', 'errors' => $errors, 'seo' => $seo]);
    }

    public function post_inquiry_us(Request $request) {
        unset($request['_token']);

        $data = array();

        foreach ($request->input() as $key => $value) {
            $data[$key] = $value;
        }

        // $id = DB::table('inquiries')->insertGetId($data);


				\Mail::to(array(env('MAIL_TO')))->send(new I($data));

        return redirect('/');
    }
}
