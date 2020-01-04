<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {

        return view('index');

    }

    public function leads()
    {
        $company = "W3SCloud";
        return view('leads', ['company' => $company]);
    }

    public function account()
    {
        return view('account');
    }

    public function contact()
    {
        return view('contact');
    }
}
