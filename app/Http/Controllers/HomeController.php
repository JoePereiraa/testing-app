<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {

        $title = 'Home';
        return view('pages.home', [
            'title' => $title,
        ]);
    }
}
