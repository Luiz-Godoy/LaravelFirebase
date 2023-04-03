<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;


class ContactController extends Controller
{
    public $database;
    public $tablename;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'Users';
    }
    public function index()
    {
        return view('layout.body.index');
    }

    public function login()
    {
        return view('layout.body.login.login');
    }

    public function register()
    {
        return view('layout.body.register.register');
    }

    public function edit()
    {
        return view('layout.body.user.edit');
    }

    public function user()
    {
        return view('layout.body.user.user');
    }

    public function createUser(Request $request)
    {
        $postData = [
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password
        ];

        $postRef = $this->database->getReference($this->tablename)->push($postData);

        if($postRef)
        {
            return redirect('UserLogin')->with('status','Usuario adicionado com sucesso!');
        }
        else
        {
            return redirect('UserRegister')->with('status','Falha ao adicionar o usuário!');
        }
    }
}
