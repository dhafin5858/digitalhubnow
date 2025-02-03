<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Pass the authenticated user's data to the view
        return view('dashboard', [
            'user' => auth()->user(),
        ]);
    }
}