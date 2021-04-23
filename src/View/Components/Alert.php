<?php

namespace Manzadey\ViewAdminComponents\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;

    public function __construct(string $type = 'warning')
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('mva::components.alert');
    }
}
