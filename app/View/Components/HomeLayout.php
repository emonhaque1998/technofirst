<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\WebsiteInformation;

class HomeLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $dataInformation = WebsiteInformation::latest()->first();          
        $this->information = $dataInformation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.home');
    }
}
