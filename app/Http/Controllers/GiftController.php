<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GiftController extends Controller
{
    public function index()
    {
        return view('gift.index');
    }

    public function store(Request $request,Gift $gift)
    {
        $toyyibpay_secret_key = config('services.toyyibpay.secret');

        $url = config('services.toyyibpay.url').'index.php/api/createBill';

        $priceAmount = $request->price * 100;

        $gift->create([
            'name' => $request->name,
            'price' => $priceAmount,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);

        $body =[
            'userSecretKey' => $toyyibpay_secret_key,
            'categoryCode' => config('services.toyyibpay.categoryCode'),
            'billName' => 'Majlis Tunang',
            'billDescription' => 'Hadiah bernilai : RM '.$request->price,
            'billAmount' => $priceAmount,
            'billReturnUrl'=>route('gift.returnURL'),
            'billCallbackUrl'=>route('gift.callbackURL'),
            'billExternalReferenceNo' => $request->id,
            'billPayorInfo'=>1,
            'billPhone'=> $request->phone_number,
            'billTo'=> $request->name,
            'billEmail'=> $request->email,
            'billPriceSetting'=>1,
            'billContentEmail'=>'Terima Kasih untuk pemberian hadiah bernilai : RM '.$request->price,
            'billPaymentChannel'=>2,
            'billChargeToCustomer'=>''
        ];

        $response = Http::asForm()->post($url, $body);

        $BillCode = $response->json()[0]['BillCode'];

        $gift->update([
            'toyyibpay_bill_code' => $BillCode,
        ]);

        return redirect(config('services.toyyibpay.url').$BillCode);
    }

    public function returnURL(Request $request)
    {
        $gift = Gift::where('toyyibpay_bill_code',$request->billcode)->first();
        if($gift){ 
            if($gift->id == $request->order_id){
                $purchase->update(['payment_status'=>1]);

                return to_route('gift.index')->with([
                    'alert-type' => 'alert-success',
                    'alert-message' => 'Terima untuk pemberian hadiah!'
                ]);
            }

            return to_route('gift.index')->with([
                'alert-type' => 'alert-warning',
                'alert-message' => 'Food updated successfully'.$gift->payment_link
            ]);
        
        }
        else
        {
            return to_route('gift.index')->with([
                'alert-type' => 'alert-danger',
                'alert-message' => 'Sila semak kembali sambungan internet anda'
            ]);
        }
    }

    public function callbackURL(Request $request)
    {
        \info(['from payment gateway' => $request->all()]);
        $gift = Gift::where('toyyibpay_bill_code',$request->billcode)->first();
        if($gift){
            if($gift->id == $request->order_id){
                $gift->update(['payment_status'=>1]);

                \info(['success' => 'update order success']);
            }

            \info(['failed' => 'respond is not valid']);
        }
        else
        {
            \info(['failed' => 'failed']);
        }
    }
}
