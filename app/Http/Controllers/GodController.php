<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GodController extends Controller
{
    public function index($id = false)
    {
    	$gods = config('god');
    	if ($id === false) {
    		$number = mt_rand(0, 3);
    		return redirect($number);
    	}

    	return view('god', $gods[$id]);
    }
}
