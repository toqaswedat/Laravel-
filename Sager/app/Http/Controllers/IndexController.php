<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $arrayIndex['countProduct']= Product::count();
        $arrayIndex ['countUser'] = User::count();
        $arrayIndex['countCategory'] = Category::count();

        return view('welcome', compact('arrayIndex'));
    }
}
