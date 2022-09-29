<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Dotenv\Parser\Value;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class logueoController extends FacadesAuth
{
    public function login (Request $request){
        $email = $request->email;
        $password = $request->password;
        $validacion = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validacion->fails()){
            $usuarioemial = User::where('email',$email)->get();
            if(Hash::check($password, $usuarioemial->password)){

                return view('Admin.Dashboard');

                Session::put('id',$usuarioemial->id);
                Session::put('user',$usuarioemial->name);
                Session::put('email',$usuarioemial->email);

                return view('Admin.Dashboard');
            }
        }
    }
}
