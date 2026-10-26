<?php

namespace App\Http\Controllers;

use App\Models\UserAccount;

class UserController extends Controller
{
    public function index()
    {
        $users = UserAccount::all();

        return view('users', compact('users'));
    }
}