<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $page;

    public function __construct($page = null)
    {
        $this->page = $page;
    }

    public function render()
    {
        return view('components.navbar');
    }
}
