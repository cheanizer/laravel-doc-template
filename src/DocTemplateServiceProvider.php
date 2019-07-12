<?php
namespace Cheanizer\DocTemplate;
use Illuminate\Support\ServiceProvider;

class DocTemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('doc-template', function() {
            return new DocTemplate;
        });
    }
    public function boot()
    {
        //
        //$this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}