<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use App\Models\Payment;
use DateTime;


class userController extends Controller
{
    public function store(Request $request){
        $registro = User::where([
            [
                'email','=',$request->email
            ]
        ])->first();
        if($registro != null){
            return redirect('/register')->with('error', 'O E-mail enviado já está cadastrado');
        }
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = Jetstream::newUserModel()->forceFill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save();

        event(new Registered($user));

        Auth::login($user);

        $user=User::findOrFail($user->id);
        $user->balance = 0.0;
        $user->save();


        return redirect('/dashboard')->with('rn','Primeira Vez');
    }
    public function dashboard(){
        $user = auth()->user();
        
        return view('dashboard',['user'=>$user,'balance'=>$user->balance]);
    }
    
}
