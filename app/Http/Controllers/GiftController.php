<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index()
    {
        return view('gift.index');
    }

    public function store(Request $request)
    {
        $toyyibpay_secret_key = config('services.toyyibpay.secret');

        $url = config('services.toyyibpay.url').'createBill';

        $body =[
            'userSecretKey' => $toyyibpay_secret_key,
            'categoryCode' => config('services.toyyibpay.categoryCode'),
            'billName' => $request->name,
            'billDescription' => 'Hadiah bernilai : RM '.$request->price,
            'billAmount' => $request->price,
            'billReturnUrl'=>route('returnURL'),
            'billCallbackUrl'=>route('callbackURL'),
            'billExternalReferenceNo' => $request->id,
            'billPayorInfo'=>1,
            'billPhone'=> $request->phone_number,
            'billTo'=> '',
            'billEmail'=> $request->email,
            'billPriceSetting'=>0,
            'billContentEmail'=>'Terima Kasih untuk permberiah hadiah bernilai : RM '.$request->price,
            'billChargeToCustomer'=>''
        ];

        $response = Http::asForm()->post($url, $body);
       
        $bill_code = $response->json()[0]['BillCode'];

        $purchase->update(['toyyibpay_bill_code' => $bill_code]);

        return to_route('main:index');
    }
}
