<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use App\Mail\ApplyNow;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Contact Us mail
     */
    public function contactUs(ContactUsRequest $request){
       $body = [
        'name' => $request->name,
        'email' =>  $request->email,
        'message' => $request->message,
       ];

       $subject = $request->subject;

       Mail::to('enquiries@nta.nsw.edu.au')->send(new ContactUs($subject, $body));

       $notification = [
        'message'   =>  'Thanks for you query!',
        'alert-type'    =>  'info'
        ];

        return redirect()->back()->with($notification);
    }


    /**
     * Apply For course
     */
    public function courseApply(Request $request){
        $body = [
            'name' => $request->name,
            'email' =>  $request->email,
            'contact' =>  $request->contact,
            'nationality' =>  $request->nationality,
            'course' =>  $request->course,
            'msg' => $request->msg
        ];

        Mail::to('enquiries@nta.nsw.edu.au')->send(new ApplyNow($body));

        $notification = [
            'message'   =>  'Thanks for your application',
            'alert-type'    =>  'info'
            ];
    
            return redirect()->back()->with($notification);
    }
}
