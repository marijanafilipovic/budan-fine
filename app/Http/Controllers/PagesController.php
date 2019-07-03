<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Instagram;
use Mail;
class PagesController extends Controller
{
    public function index(){
      //   $posts= Post::orderBy('created_at', 'desc')->limit(1)->get();
       // $posts = Post::where('status', 1)->paginate(1);
       // return view('home', ['posts' => $posts,]);
         return view('home');

    }

    public function prica(){
return view('prica');
    }
    public function usluge(){
        return view('usluge');
    }
    public function contact(){
        return view('contact');
    }
    public function coaching(){
        return view('coaching');
    }
    public function energija(){
        return view('energetska-terapija');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'min:15'
        ]);
   // Mail::to('marijana.beograd@gmail.com')->send($request->email, $request->name, $request->message);
     /*     Mail::send('contact', [
            'msg' => $request->message
        ], function ($mail) use($request){
            $mail->from($request->email, $request->name);

            $mail->to('marijana.beograd@gmail.com')->subject('Email sa sajta budan.rs');
        });*/
     $data = array(
       'email' => $request->email,
       'name' => $request->name,
       'bodyMessage' => $request->message
     );
     Mail::send('emails.contact-message', $data, function($message) use($data){
         $message->from($data['email']);
         $message->to('marija.dajic@yahoo.com', 'Marija');
        $message->subject($data['bodyMessage']);
     });
        return redirect()->back()->with('flash-message', 'Hvala. Vasa poruka je uspesno primljena.');
    }
}
