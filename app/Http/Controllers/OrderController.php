<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index() {
        return view('order.index', [
            '_isHome' => '',
            '_isPortfolio' => '',
            '_isOrder' => 'view'
        ]);
    }

    public function send(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->mail;
        $details = $request->details;

        Mail::to('kotickpro@gmail.com')->send(new OrderMail($name, $phone, $email, $details));

        return redirect()->back();
    }
}
