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
            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu solicitat din aplicatie');
        });
    }

    public function requestPayrollService(Request $request) {
        Mail::send('emails.servicePayrollRequest', $request->all(), function($message) {
//            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu solicitat din aplicatie');
            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu de salarizare solicitat din aplicatie');
        });
    }

    public function requestAuditService(Request $request) {
        Mail::send('emails.serviceAuditRequest', $request->all(), function($message) {
//            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu solicitat din aplicatie');
            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu de audit solicitat din aplicatie');
        });
    }

    public function requestCompanyService(Request $request) {
        Mail::send('emails.serviceCompanyRequest', $request->all(), function($message) {
//            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu solicitat din aplicatie');
            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu de infiintare/mentinue/radiere companie solicitat din aplicatie');
        });
    }

    public function contact(Request $request) {
        Mail::send('emails.contact', $request->all(), function($message) {
//            $message->to('mihaelamicu.stoian@gmail.com')->subject('Serviciu solicitat din aplicatie');
            $message->to('mihaelamicu.stoian@gmail.com')->subject('Contact');
        });
    }
}
