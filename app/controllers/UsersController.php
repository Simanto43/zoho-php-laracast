<?php

namespace App\Controllers;

use App\core\App;

class UsersController
{

    public function index()
    {
        $users = App::get('database')->selectAll('name');

        return view('users', compact('users'));
    }

    public function store()
    {


        App::get('database')->insert('name', [
            'name' => $_POST['name']
        ]);

        header('location: /users');
    }

}