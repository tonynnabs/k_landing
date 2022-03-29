<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ticker extends Component
{
    public $coins;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($coins)
    {
        $this->coins = $coins;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ticker');
    }
}
