<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Contact(){
        return view('Contact');
      }
      public function ContactDetails(Request $request){
            $validate = $request->validate([
                "name"=>"required|min:4|max:20",
                'email'=>'required|email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
                'msg' => 'required'
            ],
        );
        $output = "<h1>YOUR CONTACT DETAILS</h1>";
        $output.= "Name:  ".$request->name. "<br>";
        $output.= "Email: ".$request->email. "<br>";
        $output.= "Phone: ".$request->phone. "<br>";
        $output.= "Massage: ".$request->msg. "<br>";
        return $output;
        }
}
