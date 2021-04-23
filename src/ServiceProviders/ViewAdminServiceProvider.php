<?php

namespace Manzadey\ViewAdminComponents\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Manzadey\ViewAdminComponents\View\Components\Alert;
use Manzadey\ViewAdminComponents\View\Components\ButtonLink;
use Manzadey\ViewAdminComponents\View\Components\ModelActions;
use Manzadey\ViewAdminComponents\View\Components\Paginate;
use Manzadey\ViewAdminComponents\View\Components\Table;
use Manzadey\ViewAdminComponents\View\Components\TableRow;

class ViewAdminServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->publishes([
            __DIR__ . '../../config/view-admin-components.php' => config_path('view-admin-components.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '../../views'                            => resource_path('views/vendor/view-admin-components'),
        ], 'views');
        $this->loadViewsFrom(__DIR__ . '../../views', 'mva');
        $this->loadViewComponentsAs('mva', [
            Alert::class,
            ButtonLink::class,
            Paginate::class,
            Table::class,
            TableRow::class,
            ModelActions::class,
        ]);
    }

    public function register() : void
    {
        $this->mergeConfigFrom(__DIR__ . '../../config/view-admin-components.php', 'view-admin-components');
    }
}
