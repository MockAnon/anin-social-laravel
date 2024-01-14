<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests\StoreLocation;
use Validator;

class ContactMessageController extends Controller
{
    //
    public function create()
    {
        return view('welcome');
    }

    public function postMessage(Request $request)
    {
        //this is a honey pot.
        if(!empty($request->input('subject'))) {
             return response()->json(['message'=>"Thank you for your message", 'code'=>400]);
        }
        
        $validator = Validator::make($request->all(),[
               'name' => 'required|max:100|regex:/^[\.a-zA-Z0-9,!:;? ]*$/',
               'email' => 'required|email|max:100',
               'message' => 'required|max:255|regex:/^[\.a-zA-Z0-9,!:;? ]*$/',
               'g-recaptcha-response' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()]);
        }

        Mail::send('emails.contactMessage', [
            'msg' => $request->message,
            'email' => $request->email,
            'name' => $request->name
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->subject($request->email);
            $mail->to('jarondevans@gmail.com')->subject('Contact Message');
        });

        //return Redirect()->back()->with('flash_message', 'Thank you for your message.');
        return response()->json(['message' => 'Thank you for your message']);
    }
}
