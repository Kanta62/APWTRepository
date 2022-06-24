<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function Login(){
        return view('Login');
    }
    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20",
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ],
    );
}
    public function CustReg(){
        return view('Registration');
    }
    public function passes($attribute, $value)
    {
        if(preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/', $value)){
            return true;
        }else {
            return false;
        }
    }
    public function CustRegSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:4|max:20",
            "id"=>"required|integer|digits:8",
            'dob'=>'required|after_or_equal:1990-01-01|before:today',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'address' => 'required'
        ],
        ['name.required'=>"Required Field must be Filled-Up"]
    );
    $output = "<h1>SUBMITTED DATA</h1>";
    $output.= "Name:  ".$request->name. "<br>";
    $output.= "ID:    ".$request->id. "<br>";
    $output.= "DOB:   ".$request->dob. "<br>";
    $output.= "Email: ".$request->email. "<br>";
    $output.= "Phone: ".$request->phone. "<br>";
    $output.= "Address: ".$request->address. "<br>";
    return $output;
   }

}