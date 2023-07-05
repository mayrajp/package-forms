<?php

namespace Mayrajp\Forms\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class DynamicFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom('/database/migrations');
        // $this->loadRoutesFrom('/routes/api.php');


    }
    public function register()
    {
        // $this->app->register(
        //     DynamicFormServiceProvider::class,
        // );  

        // $router = $this->app->make('router');

        // $router ->namespace('Api')
        //         ->controller(DynamicFormController::class)->group(function () {
        //             Route::get('/dynamic_forms/all', 'index');
        //             Route::post('/dynamic_forms/create', 'create');
        //             Route::get('/dynahttps://packagist.org/packages/mayrajp/forms#v1.0.1mic_forms/show/{id}', 'show');
        //             Route::put('/dynamic_forms/update/{id}', 'update');
        //             Route::delete('/dynamic_forms/delete/{id}', 'destroy');
        //         });

        $this->app->make('Mayrajp\Forms\Http\Controllers\Api\CompletedFormController');
        $this->app->make('Mayrajp\Forms\Http\Controllers\Api\DynamicFormController');  
        $this->app->make('Mayrajp\Forms\Http\Controllers\Api\FieldController');

    }
}
