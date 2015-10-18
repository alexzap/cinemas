<?php

namespace App\Http\Controllers;
use DB;

class CinemaController extends Controller
{    
    public function index() {
    	$results = DB::select('select * from cinema', array(1));
    	echo $results;
    }
}
