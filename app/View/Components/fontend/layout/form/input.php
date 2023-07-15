<?php

namespace App\View\Components\fontend\layout\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $name;

    public $placeholder;

    public function __construct($name, $placeholder)
    {
        $this->name = $name;
        $this->placeholder= $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fontend.layout.form.input');
    }
}
