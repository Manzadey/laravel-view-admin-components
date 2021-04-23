<?php

namespace Manzadey\ViewAdminComponents\View\Components;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Manzadey\ViewAdminComponents\Interfaces\ActionRoutes;

class ModelActions extends Component
{
    public $route;

    public $model;

    public function __construct(ActionRoutes $model)
    {
        $this->model = $model;
        $this->route = $model->getActionRoute();
    }

    public function show() : bool
    {
        return $this->checkRoute("admin.$this->route.show");
    }

    public function edit() : bool
    {
        return $this->checkRoute("admin.$this->route.edit");
    }

    public function destroy() : bool
    {
        return $this->checkRoute("admin.$this->route.destroy");
    }

    private function checkRoute(string $name) : bool
    {
        return Route::has($name);
    }

    public function render()
    {
        return view('mva::components.model-actions');
    }
}
