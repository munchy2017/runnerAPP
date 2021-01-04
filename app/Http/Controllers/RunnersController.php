<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RunnersController extends Controller
{
    
      //
      public function getRunners(){
        $runners = DB::connection('mysql')
        ->select("SELECT *  from  runners");
        dd($runners);
        return view('runners')
        ->with('runner', $runners);
    }

    public function postRunners(){

    }
}
