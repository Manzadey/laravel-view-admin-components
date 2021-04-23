<?php

namespace Manzadey\ViewAdminComponents\View\Components;

use Illuminate\View\Component;

class ButtonLink extends Component
{
    public $name;

    public $color;

    public $link = '#';

    public function __construct(string $name, string $link, string $color = 'primary')
    {
        $this->name  = $name;
        $this->color = $color;
        $this->link  = $link;
    }

    public function render()
    {
        return view('mva::components.button-link');
    }
}
