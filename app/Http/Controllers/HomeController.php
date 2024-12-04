<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return view('KantinAfwah.home');
    }
    public function ourbrands()
    {
        return view('KantinAfwah.ourbrands');
    }
    public function about_us()
    {
        return view('KantinAfwah.about');
    }
    public function news()
    {
        return view('KantinAfwah.news&event');
    }
    public function career()
    {
        return view('KantinAfwah.career');
    }
    public function contact_us()
    {
        return view('KantinAfwah.contact');
    }
    public function login()
    {
        return view('KantinAfwah.login');
    }
    public function register()
    {
        return view('KantinAfwah.register');
    }
}
