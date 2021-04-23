<?php

namespace Manzadey\ViewAdminComponents\View\Components;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paginate extends Component
{
    public $collection;

    public function __construct(LengthAwarePaginator $collection)
    {
        $this->collection = $collection;
    }

    public function render() : View
    {
        return view('mva::components.paginate');
    }
}
