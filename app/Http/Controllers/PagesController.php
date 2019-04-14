<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PagesController extends Controller
{
  // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function getContact() {
    return view('pages.contact');
  }
    
  public function postContact(Request $request) {
    $this->validate($request, [
      'email' => 'required|email',
      'subject' => 'min:3',
      'message' => 'min:10']);


      $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->reply_to('hello@devmarketer.io');
      $message->subject($data['subject']);
      // $m->from('hello@app.com', 'Your Application');

      // $m->to($user->email, $user->name)->subject('Your Reminder!');
    });

  }
} 