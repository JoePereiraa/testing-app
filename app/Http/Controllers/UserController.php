<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $id): View
    {

        // $user = $this->users->find($id);

        return view('user.profile' ?? 'nao existe', [
            // 'user' => $user
        ]);
    }
}
