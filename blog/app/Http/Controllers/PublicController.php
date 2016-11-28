<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PublicController extends Controller
{
    //

   public function about(){

   	// $name="Sedc";
   	// $lastname="<i>PHP</i>";

   	$values=[

   	'firstname'=>'Sedc',
   	'lastname'=>'<i>PHP</i>',
   	'myteam'=>[
   		// 'John Doe',
   		// 'Jane Doeee'

   	]

   	];
    	return view('public/about',$values);
    	// ->with('firstname',$name)
    	// ->with('lastname',$lastname);
    }
}
