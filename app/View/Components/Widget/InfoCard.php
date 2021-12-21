<?php

namespace App\View\Components\Widget;

use Illuminate\View\Component;

class InfoCard extends Component
{

    public $bg;
    public $tittle;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($bg,$tittle=null,$value=null)
    {
        $this->bg=$bg;
        $this->tittle=$tittle;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widget.info-card');
    }
}
