<?php

namespace App\View\Components;

use Illuminate\View\Component;

class rateItem extends Component
{
    public $coin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($coin)
    {
        $this->coin = $coin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rate-item');
    }
}
