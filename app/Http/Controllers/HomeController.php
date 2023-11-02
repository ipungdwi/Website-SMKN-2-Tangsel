<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('content.home');
    }
    public function profil() {
        return view('content.profil');
    }
    public function staff() {
        return view('content.staff');
    }
}
