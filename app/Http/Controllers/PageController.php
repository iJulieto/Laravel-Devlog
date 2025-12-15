<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $json = file_get_contents(resource_path('data/homeData.json'));
        $data = json_decode($json, true);
        return view('pages.home', $data);
    }

    public function about()
    {
        $json = file_get_contents(resource_path('data/aboutData.json'));
        $data = json_decode($json, true);
        $data['images'] = array_map(fn($img) => asset($img), $data['images']);
        return view('pages.about', $data);
    }

    public function contact()
    {
        $json = file_get_contents(resource_path('data/contactData.json'));
        $data = json_decode($json, true);
        return view('pages.contact', $data);
    }

    public function login()
    {
        $json = file_get_contents(resource_path('data/authData.json'));
        $data = json_decode($json, true);
        return view('pages.login', $data['login']);
    }

    public function register()
    {
        $json = file_get_contents(resource_path('data/authData.json'));
        $data = json_decode($json, true);
        return view('pages.register', $data['register']);
    }
}