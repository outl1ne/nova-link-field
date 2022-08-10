<?php

namespace Outl1ne\NovaLinkField;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('link-field', __DIR__ . '/../dist/js/entry.js');
            Nova::style('link-field', __DIR__ . '/../dist/css/entry.css');
        });
    }
}
