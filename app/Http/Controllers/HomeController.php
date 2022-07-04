<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return inertia('Home', [
            'user' => [
                'name' => 'Irsyad A. Panjaitan',
                'username' => 'irsyadadl'
            ],
            'app_name' => config('app.name'),
        ]);
    }
}
