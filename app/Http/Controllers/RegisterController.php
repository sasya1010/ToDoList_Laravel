<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);

        $request = session();
        $request->flash('success', 'Registrasion successfull! Please login');

        return redirect('/login');

    }
}
