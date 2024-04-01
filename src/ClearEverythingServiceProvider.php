<?php
namespace levizoesch\cleareverything;

use Illuminate\Support\ServiceProvider;
use levizoesch\cleareverything\ClearEverything;

class ClearEverythingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            ClearEverything::class
        ]);
    }
}
