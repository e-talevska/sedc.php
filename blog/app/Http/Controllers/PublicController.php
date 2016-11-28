<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about() {
//        $name = 'sedc';
//        $lastname= "<i>PHP</i>";
        
        $values = [
          'firstname' => 'Sedc',
            'lastname' => '<i>PHP</i>',
              'myteam' => [
                  'John Doe',
                  'Jane Doe',
                  
              ]
            
        ];
        
        return view ("public/about", $values);
//                ->with('firstname',$name)
//                ->with('lastname',$lastname);
    }
}
