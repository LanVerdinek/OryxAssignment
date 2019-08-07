<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use DB;

class ComposerServiceProvider extends ServiceProvider {

    public function boot()
    {
        View::composer('layouts.app', function($view){
            $users = DB::select('SELECT * FROM users');
            $view->with('person', $users);
        });
    }


    public function register()
    {
        //
    }
}