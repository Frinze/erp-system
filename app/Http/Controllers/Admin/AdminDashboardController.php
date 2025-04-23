<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function dashboard()
    {
        $users = \App\Models\User::all(); // or use paginate()
        return view('admin.dashboard', compact('users'));
    }    

}
