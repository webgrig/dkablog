<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLinks extends Component
{
    public $href;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href=false, $active=false)
    {
        $this->href = $href;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin.components.nav-links');
    }
}
