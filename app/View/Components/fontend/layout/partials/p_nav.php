<?php

namespace App\View\Components\fontend\layout\partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class p_nav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fontend.layout.partials.p_nav');
    }
}
