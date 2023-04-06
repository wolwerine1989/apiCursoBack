<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PaymentDone;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function mail()
    {
        Mail::to('ejemplos@gmail.com')->send(new PaymentDone());
        return response()->json(["message" => "Se a enviado el mail exitosamente."]);
    }
}
