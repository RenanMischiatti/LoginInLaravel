<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class LoginController extends Controller
{

    public function cadastro(Request $request) {

        //Verifica se já há usuários com este email
        $email = $request->email;
        $users = Users::where('email', $email)->first();

        if(isset($users)) {
            return redirect()->back()->with('danger', 'Email Já cadastrado');
        }
        
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatorio'
        ]);

        //Cadastra no DB
        $Users = new Users;
        $name = explode("@", $request->email);
        $Users->name = $name[0];
        $Users->email = $request->email;
        $Users->password = bcrypt($request->password);
        $Users->save();
        return redirect('/#login')->with('success', 'Usuário Cadastrado');
    }

    public function autenticar(Request $request) {


        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/logado')->with('logou', 1);
        }

        return redirect('/#login')->withErrors([
            'email' => 'Login ou Senha invalidos.',
        ])->onlyInput('email');
    }
}
