<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * L'acceuil du dashboard
     *
     * @return Illumniate\Http\Response
     */
    public function home(){
        return view('dashboard.home');
    }
}
