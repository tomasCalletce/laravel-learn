<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserApp;

class UserAppController extends Controller
{

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        UserApp::create($request->all());

        return redirect()->route('users.create')
                        ->with('success', 'User created successfully.');
    }

}

