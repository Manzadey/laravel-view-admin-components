<?php

namespace Manzadey\ViewAdminComponents\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableRow extends Component
{
    public $active;

    public $sn;

    public function __construct(bool $active = true, ?int $sn = null)
    {
        $this->active = $active;
        $this->sn     = $sn;
    }

    public function activeClasses() : ?string
    {
        if(!$this->active) {
            return 'text-muted bg-light';
        }

        return null;
    }

    public function render() : View
    {
        return view('mva::components.table-row');
    }
}
