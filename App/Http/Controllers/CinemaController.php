<?php

namespace App\Http\Controllers;
use DB;
use Response;
use Request;

class CinemaController extends Controller
{    
    public function index() {
    	//$session_times = DB::table('session_times')->get();
    	//return view('cinema', ['cinema' => $cinema]);
    	
    	$cinemaId = Request::input('id');

    	$session_times = DB::table('session_times')
    	->join('cinema', 'session_times.cinema_id', '=', 'cinema.id')
    	->join('movies', 'session_times.movie_id', '=', 'movies.id')
    	->select('movies.title', 'session_times.date_time')
    	->where('cinema.id', '=', $cinemaId)
    	->get();
    	return Response::json($session_times);
    }

}
