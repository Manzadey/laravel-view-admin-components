<?php

namespace Manzadey\ViewAdminComponents\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Table extends Component
{
    public $actions;

    public $headers;

    public $collection;

    public $alert;

    public $iteration;

    public function __construct(
        string $headers,
        $collection,
        string $alert = null,
        bool $actions = false,
        bool $iteration = false
    )
    {
        $this->headers    = $this->headersToArray($headers);
        $this->collection = $collection;
        $this->alert      = $alert ?? 'Данные отсутствуют';
        $this->actions    = $actions;
        $this->iteration  = $iteration;
    }

    public function render() : View
    {
        return view('mva::components.table');
    }

    public function countHeaders() : int
    {
        return count($this->headers);
    }

    private function headersToArray(string $headers) : array
    {
        $headers = array_map('trim', explode(',', $headers));

        if($this->iteration) {
            array_unshift($headers, '#');
        }

        if($this->actions) {
            array_push($headers, '*');
        }

        return $headers;
    }
}
