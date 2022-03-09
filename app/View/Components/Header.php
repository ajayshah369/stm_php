<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $active;
    public $contact;
    public $services;
    public function __construct($data)

    {
        //
        $this->active=$data;
        $this->contact=DB::select('select * from contact_us')[0];
        $this->services=DB::select('select * from services');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
