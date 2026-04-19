<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $subtitle = 'Selamat datang di dashboard';
        
        return view('dashboard', compact('title', 'subtitle'));
    }

    public function students()
    {
        return 'Ini halaman student dari DashboardController';
    }

    public function courses()
    {
        return 'Ini halaman course dari DashboardController';
    }
}

