<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException; 

class Pages extends Controller
{
    public function home()
    {
        $contact = DB::select('select * from contact_us')[0];
        $seo = DB::select('select * from seo where page="home"')[0];

        $big_images = DB::select('select * from big_images');
        $about_us = DB::select('select * from about_us')[0];
        $why_choose_us = DB::select('select * from why_choose_us');
        $top_services = DB::select('select * from services where highlight=1');
        $how_it_works = DB::select('select * from how_it_works');
        $our_clients = DB::select('select * from our_clients');
        $branches = DB::select('select * from branches order by title');

        return view('pages.home', ['contact' => $contact, 'seo' => $seo, 'active' => 'home', 'big_images' => $big_images, 'about_us' => $about_us, 'why_choose_us' => $why_choose_us, 'top_services' => $top_services, 'how_it_works' => $how_it_works, 'our_clients' => $our_clients, 'branches' => $branches]);
    }

    public function about_us()
    {
        $seo = DB::select('select * from seo where page="about-us"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $about_us = DB::select('select * from about_us')[0];
        $services = DB::select('select * from services');
        $branches = DB::select('select * from branches order by title');


        return view('pages.about', ['seo' => $seo, 'contact' => $contact, 'about_us' => $about_us, 'services' => $services, 'branches' => $branches, 'active' => 'about-us']);
    }

    public function services()
    {
        $seo = DB::select('select * from seo where page="services"')[0];
        $services = DB::select('select * from services');
        $branches = DB::select('select * from branches order by title');
        $contact = DB::select('select * from contact_us')[0];


        return view('pages.services', ['seo' => $seo, 'services' => $services, 'branches' => $branches, 'contact' => $contact, 'active' => 'services']);
    }

    public function process() {
        $seo = DB::select('select * from seo where page="process"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $process = DB::select('select * from processes');
        $branches = DB::select('select * from branches order by title');

        return view('pages.process', ['seo' => $seo, 'contact' => $contact, 'process' => $process, 'branches' => $branches, 'active' => 'process']);
    }

    public function clients() {
        $seo = DB::select('select * from seo where page="clients"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $clients = DB::select('select * from our_clients');
        $branches = DB::select('select * from branches order by title');

        return view('pages.clients', ['seo' => $seo, 'contact' => $contact, 'clients' => $clients, 'branches' => $branches, 'active' => 'clients']);
    }

    public function contact_us() {
        $seo = DB::select('select * from seo where page="contact-us"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $branches = DB::select('select * from branches order by title');

        return view('pages.contact_us', ['seo' => $seo, 'contact' => $contact, 'branches' => $branches, 'active' => 'contact-us']);
    }

    public function gallery() {
        $seo = DB::select('select * from seo where page="gallery"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $branches = DB::select('select * from branches order by title');
        $gallery = DB::select('select * from gallery order by date desc');

        return view('pages.gallery', ['seo' => $seo, 'contact' => $contact, 'branches' => $branches, 'gallery' => $gallery, 'active' => 'gallery']);
    }

    public function achievements() {
        $seo = DB::select('select * from seo where page="achievements"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $achievements = DB::select('select * from achievements order by date desc');

        return view('pages.achievements', ['seo' => $seo, 'contact' => $contact, 'achievements' => $achievements, 'active' => 'achievements']);
    }

    public function iba_approved() {
        $seo = DB::select('select * from seo where page="iba-approved"')[0];
        $contact = DB::select('select * from contact_us')[0];

        return view('pages.iba_approved', ['seo' => $seo, 'contact' => $contact, 'active' => 'iba-approved']);
    }

    public function blogs() {
        $seo = DB::select('select * from seo where page="blogs"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $blogs = DB::select('select * from blogs order by date desc');

        return view('pages.blogs', ['blogs' => $blogs, 'seo' => $seo, 'contact' => $contact, 'active' => 'blogs']);
    }

    public function branches() {
        $seo = DB::select('select * from seo where page="branches"')[0];
        $contact = DB::select('select * from contact_us')[0];
        $branches = DB::select('select * from branches order by title');

        return view('pages.branches', ['seo' => $seo, 'contact' => $contact, 'active' => 'branches', 'branches' => $branches]);
    }

    public function blog(Request $request) {
        $contact = DB::select('select * from contact_us')[0];
        $branches = DB::select('select * from branches order by title');

        $x = DB::select('select * from blogs where slug=?', [$request->slug]);
        
        if (count($x) == 0) {
            abort(404);
        }

        $blog = $x[0];
        $seo = DB::select('select seo_title as title, seo_description as description, seo_keywords as keywords, seo_property_title as property_title, seo_property_description as property_description, seo_property_keywords as property_keywords, seo_twitter_title as twitter_title, seo_twitter_description as twitter_description, seo_twitter_keywords as twitter_keywords from blogs where slug=?', [$request->slug])[0];

        return view('pages.blog', ['blog' => $blog, 'seo' => $seo, 'contact' => $contact, 'active' => 'xxx', 'branches' => $branches]);
    }

    public function branch_service(Request $request) {
        $contact = DB::select('select * from contact_us')[0];
        $branches = DB::select('select * from branches order by title');
        $services = DB::select('select * from services');

        $x = DB::select('select * from services where slug=?', [$request->slug]);

        if (count($x) != 0) {
            $service = $x[0];
        $seo = DB::select('select seo_title as title, seo_description as description, seo_keywords as keywords, seo_property_title as property_title, seo_property_description as property_description, seo_property_keywords as property_keywords, seo_twitter_title as twitter_title, seo_twitter_description as twitter_description, seo_twitter_keywords as twitter_keywords from services where slug=?', [$request->slug])[0];

        return view('pages.service', ['service' => $service, 'seo' => $seo, 'contact' => $contact, 'active' => 'xxx', 'branches' => $branches]);
        }
        
        $x = DB::select('select * from branches where slug=?', [$request->slug]);
        
        if (count($x) == 0) {
            abort(404);
        }

        $branch = $x[0];
        $seo = DB::select('select seo_title as title, seo_description as description, seo_keywords as keywords, seo_property_title as property_title, seo_property_description as property_description, seo_property_keywords as property_keywords, seo_twitter_title as twitter_title, seo_twitter_description as twitter_description, seo_twitter_keywords as twitter_keywords from branches where slug=?', [$request->slug])[0];

        return view('pages.branch', ['services' => $services, 'branch' => $branch, 'seo' => $seo, 'contact' => $contact, 'active' => 'xxx', 'branches' => $branches]);
    }
}
