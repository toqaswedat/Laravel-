<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $Users = User::orderBy('updated_at', 'desc')->get();

        return view('User.index', compact('Users'));
    }
}
