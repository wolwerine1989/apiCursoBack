<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PaymentDone;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function mail()
    {
        Mail::to('therichposts@gmail.com')->send(new PaymentDone());
        return response()->json(["message" => "Email sent successfully."]);
    }
}
