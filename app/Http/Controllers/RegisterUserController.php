<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function indexregister(){
        return view('auths.register');
    }


    public function postRegister(Request $request){
        $this->validate($request, [
            'name'=>'required|min:3',
            'email'=>'required|min:3',
            'password'=>'required|min:8'
        ]);
        $data = $request->except('password');
        $data['password'] = bcrypt($request->password);
       
        User::create($data);
        return redirect()->route('login');
    }
}
