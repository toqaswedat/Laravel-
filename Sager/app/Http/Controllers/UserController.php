<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $Users = User::orderBy('updated_at', 'desc')->get();

        return view('User.index', compact('Users'));
    }
    public function edit($id)
    {
        $User = User::find($id);
        return view('User.edit', ['User' => $User]);
    }
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $User->name = $request->name;
        $User->save();
        return redirect('/Users');
    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('User.index')->with('success', 'User deleted successfully');
    }

    public function create()
    {
        $userId = Auth::id();
        return view('User.create', compact('userId'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            // Add your validation rules here
        ]);

        // Create a new User
        $User = new User;
        $User->fill($request->all());
        $User->save();

        // Redirect to the User list
        return redirect()->route('User.index');
    }
}
