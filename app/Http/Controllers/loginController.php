<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Pastikan nama view sama dengan file yang ada di resources/views
    }
}
