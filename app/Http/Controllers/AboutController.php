<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $test = 'testando import';
        return view('pages.about', [
            'test' => $test
        ]);
    }
}
