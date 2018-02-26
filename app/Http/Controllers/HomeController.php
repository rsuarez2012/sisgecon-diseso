<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\People;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function autocomplete(){
        
        $term = Input::get('term');
        
        $results = array();
        //$queries = People::all('dni', 'LIKE', '%'.$term.'%')->orWhere('first_name', 'LIKE', '%'.$term.'%');
        //$queries = People::where('dni', 'LIKE', '%'.$term.'%')->orWhere('first_name', 'LIKE', '%'.$term.'%')->take(3)->get();
        /*$queries = People::select()
                ->where('dni', 'LIKE', '%'.$term.'%')
                ->get();*/
        $queries = People::select()->where('dni', 'LIKE', '%'.$term.'%');

        
        /*foreach ($queries as $query)
        {
            $results[] = [ 
                'id' => $query->id, 
                'dni' => $query->dni,
                'first_name' => $query->first_name
            ];
        }*/
        return response()->json($queries);
    }
}
