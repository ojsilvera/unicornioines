<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class datoaccesocontroller extends Controller
{
    use AuthenticatesUsers;
     protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   
    public function index(){
        return view('administracion.login');
    }


    public function username()
    {
        return 'userName';
    }
}
