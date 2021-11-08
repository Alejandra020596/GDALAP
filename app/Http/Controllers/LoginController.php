<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function acceso(Request $request)
    {
        $credentials = request()->only('email');
        // dump($credentials);
        $customers = customers::where('email','=',$credentials['email'])
            ->first();

        if(!is_null($customers)){
            return view('LayoutAdminLTE/index');
        }
        else{
            $request->session()->flash('message', 'DNI incorrecto');
            return view('home.login');
        }

    }
}
