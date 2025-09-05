<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('user.index');
    }
        public function store()
    {
        return view('user.index');
    }
    public function edit()
    {
        return view('user.index');
    }

    public function update()
    {
        return view('user.index');
    }
    public function destroy()
    {
        return view('user.index');
    }
    public function show()
    {
        return view('user.index');
    }

}
