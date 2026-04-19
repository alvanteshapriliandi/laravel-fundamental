<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
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

