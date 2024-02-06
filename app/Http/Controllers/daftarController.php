<?php

namespace App\Http\Controllers;

use App\Database\Migrations\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class daftarController extends Controller
{
    public function index()
    {
        return view('daftar'); // Assuming your view file is named 'register.blade.php'
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        // Create a new user or save the data to your database
        // For simplicity, this example assumes you have a 'User' model
        // Make sure to import the User model at the beginning of the file
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // You can customize the logic here based on your application's requirements

        return redirect('/login')->with('success', 'Registration successful!'); // Redirect to home or any other page
    }
}
