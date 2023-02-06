<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $Categorios = Category::orderBy('updated_at', 'desc')->get();

        return view('Category.index', compact('Categorios'));
    }
}
