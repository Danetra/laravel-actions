<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Actions\UpdatePassword;

class UserController extends Controller
{
    public function showProfile()
    {
        return view('user-profile')->with([
            'user' => User::find(1),
        ]);
    }

    public function updateProfile(Request $request)
    {
        UpdatePassword::run(User::find(1), 'password');
        return redirect()->back();
    }
}
