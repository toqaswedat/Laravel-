<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $Categorios = Category::orderBy('updated_at', 'desc')->get();

        return view('Category.index', compact('Categorios'));
    }
    public function edit($id)
    {
        $Category = Category::find($id);
        return view('Category.edit', ['Category' => $Category]);
    }
    public function update(Request $request, $id)
    {
        $Category = Category::find($id);
        $Category->name = $request->name;
        $Category->save();
        return redirect('/Categorios');
    }

    public function destroy($id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();
        return redirect()->route('Category.index')->with('success', 'Category deleted successfully');
    }

    public function create()
    {
        $userId = Auth::id();
        return view('Category.create', compact('userId'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            // Add your validation rules here
        ]);

        // Create a new Category
        $Category = new Category;
        $Category->fill($request->all());
        $Category->save();

        // Redirect to the Category list
        return redirect()->route('Category.index');
    }




}