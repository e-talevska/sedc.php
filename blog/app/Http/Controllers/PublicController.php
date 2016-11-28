<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller {
	function about() {
		$values = [ 
				'name' => "darijan",
				'lastname' => "<i>PHP</i>",
				'myteam' => [ 
						'John Doe',
						'Jane Doe' 
				] 
		];
		return view ( 'public.about', $values );
	}
}
