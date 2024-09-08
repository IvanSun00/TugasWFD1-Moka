<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrimaryButton extends Component
{
    public $type;
    public $text;
    public $href;
    public $classes;

    public function __construct($type = 'button', $text = 'Click Me', $href = '', $classes = 'btn')
    {
        $this->type = $type;
        $this->text = $text;
        $this->href = $href;
        $this->classes = $classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.primary-button');
    }
}
