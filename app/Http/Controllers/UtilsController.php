<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class UtilsController extends Controller
{
    public function requestService(Request $request) {
        Mail::send('emails.serviceRequest', $request->all(), function($message) {
//            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu solicitat din aplicatie');
            $message->to('vctr.dumitru@gmail.com')->subject('Serviciu solicitat din aplicatie');
        });
    }
}
