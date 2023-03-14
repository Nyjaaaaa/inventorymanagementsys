<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $title = 'Users';
        $users = User::latest()->whereNotIn('name', ['admin'])->paginate(10);

        return view('admin.users.index', compact('users', 'title'));
    }

    public function create(){

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('message', 'User added succesfully.');
    }

    public function destroy(User $user){
        $user->delete();

        return back()->with('message', 'User deleted succesfully.');
    }
}
