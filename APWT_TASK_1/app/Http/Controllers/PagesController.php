<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function Home(){
        return view('home');
    }

    function Service(){

        $name = "Maria Akter Kanta";
        $id  = "MK19403431";
        $names=array("Lakme`", "M.A.C", "Avon",
        "Revolution" , "Chanel", "L'oreal", "NIVEA");

        return view('service')
        ->with('name', $name)
        ->with('id', $id)
        ->with('names', $names);
    }
    function Team(){
        return view('team');
    }
    function AboutUs(){
        return view('aboutUs');
    }
    function Contact(){
        return view('contact');
    }
}
