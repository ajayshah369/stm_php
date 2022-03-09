<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $contact;
    public $top_services;
    public $about_us;
    public function __construct()
    {
        //
        $this->contact=DB::select('select * from contact_us')[0];
        $this->top_services=DB::select('select * from services where highlight=1');
        $this->about_us=DB::select('select * from about_us')[0];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
