<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateUser;

class UserController extends Controller
{
    public function index() {
        
        $users = User::get();

        return view('users/index', compact('users'));
    }

    public function show($id) {
        
        if(!$user = User::find($id)) {
            return redirect()->route('users.index');
        }
        return view('users.show', compact('user'));
    }

    public function create() {

        return view('users.create');
    }

    public function store(StoreUpdateUser $request) {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('users.index');
    }
}
