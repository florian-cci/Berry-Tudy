<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Sebastienheyd\Systempay\Systempay;

class PaymentController extends Controller
{
    //index
    public function index($trans_id)
    {
        $transaction=Transaction::whereUuid($trans_id)->first();
        $systemPay = new Systempay;
            $systemPay= $systemPay->set([
                'amount' => $transaction->amount,
                'trans_id' => $transaction->uuid
            ]);
            
        return view('payment',compact('systemPay','transaction'));
    }
    public function transactions()
    {
        $transactions= Auth::user()->transactions;
        return view('user.transactions',compact('transactions'));
    }
    // callback
    public function callback(Request $request)
    {
        $trans_id=$request->trans_id;
        $transaction=Transaction::whereUuid($trans_id)->first();
        if(empty($transaction)){
            Log::info(json_encode($request));
        }
        $transaction->status=$request->status;
        $transaction->save();
        return 'ok';
    }
}
