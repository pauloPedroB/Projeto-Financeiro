<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use DateTime;
class paymentController extends Controller
{
    public function positive(Request $request){
        $user = auth()->user();
        if($request->date){

            $payment = new Payment;

            $payment ->snapshot = false;
            $payment->value = $request->value;
            $payment->created_at = $request->date;
            $payment->Description = 'a';
            $payment->user_id = $user->id;
            $payment->save();
            return redirect('/dashboard');
        }
        $user=User::findOrFail($user->id);
        $user->balance = $user->balance + $request->value;
        $user->save();

        $payment = new Payment;
        $payment ->snapshot = true;

        $payment->value = $request->value;
        $payment->created_at = new Datetime();
        $payment->Description = 'a';
        $payment->user_id = $user->id;
        $payment->save();


        return redirect('/dashboard');

    }
    public function negative(Request $request){
        $user = auth()->user();
        if($request->date){
            $payment = new Payment;
            $payment ->snapshot = false;

            $payment->value = -$request->value;
            $payment->created_at = $request->date;
            $payment->Description = 'a';
            $payment->user_id = $user->id;
            $payment->save();
            return redirect('/dashboard');
        }
        $user=User::findOrFail($user->id);

        $user->balance = $user->balance - $request->value;
        $user->save();

        $payment = new Payment;
        

        $payment->value = -$request->value;
        $payment->created_at = new Datetime();
        $payment->Description = 'a';
        $payment->user_id = $user->id;
        $payment->save();

        return redirect('/dashboard');

    }
}
