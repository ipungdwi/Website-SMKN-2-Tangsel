<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('content.home');
    }
    
    public function profil() {
        return view('content.about.profil');
    }
    public function staff() {
        return view('content.about.staff');
    }
    public function strukturLembaga() {
        return view('content.about.strukturLembaga');
    }
    
    public function dkv() {
        return view('content.jurusan.dkv');
    }
    public function akl() {
        return view('content.jurusan.akl');
    }
    public function tkr() {
        return view('content.jurusan.tkr');
    }
    public function tsm() {
        return view('content.jurusan.tsm');
    }
    public function elin() {
        return view('content.jurusan.elin');
    }
    public function facility() {
        return view('content.facility');
    }
    
    public function extracurricular() {
        return view('content.extracurricular');
    }
    
    public function bkk() {
        return view('content.bkk');
    }
    
    public function news() {
        return view('content.news');
    }
   
    public function contact() {
        return view('content.contact');
    }
}
