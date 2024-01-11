<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests\StoreLocation;

class ContactMessageController extends Controller
{
    //
    public function create()
    {
        return view('welcome');
    }

    public function postMessage(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required'
        // ]);

        
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required'
        // ])->validate();
        
        // if ($validator->fails()) {
        //      return response()->json(['errors'=>$validator->errors()]);
        // }

        return response()->json(['message' => 'TACO TEST']);

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
        return response()->json(['message' => 'Request completed']);
    }
}
