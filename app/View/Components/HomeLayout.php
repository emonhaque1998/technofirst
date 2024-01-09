<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\WebsiteInformation;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class HomeLayout extends Component
{
    /**
     * Create a new component instance.
     */

    public $information;

    public function __construct()
    {
        $dataInformation = Cache::remember('ws_information', Carbon::now()->addDay(), function () {
            return WebsiteInformation::latest()->first();;
        });
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
