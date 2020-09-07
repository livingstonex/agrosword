<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        \SEO::setTitle("AgroSword - Users");
        $users = User::paginate(20);
        return view('users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        \SEO::setTitle("AgroSword - Editing {$user->name}");
        return view('users.edit', compact('user'));
    }

    public function update($id)
    {
        request()->validate([
            'admin' => 'required'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'admin' =>  !! request('admin')
        ]);

        return back()->with('status', 'User updated successfully!');
    }
}
