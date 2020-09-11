<?php

namespace App\Http\Controllers\Auth;

use App\Asistencia;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest',['only'=>'mostrar']);
    }
   
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(){
        $credenciales=$this->validate(request(),[
            'usuario'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($credenciales)){
            $id=auth()->user()->id;
            $fecha=Carbon::now('America/Bogota');
            Asistencia::create([
                'persona_id' => $id,
                'fecha' => $fecha,
            ]);

            return redirect()->route('home');
        }
        return back()->withErrors(['usuario'=>'Estas credenciales no coinciden con nuestros registros'])
        ->withInput(request(['usuario']));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
   
    
}
