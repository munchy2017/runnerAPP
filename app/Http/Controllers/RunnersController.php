<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RunnersController extends Controller
{
    
      //
      public function getRunners(){

        $categories = DB::connection('mysql')
        ->select("SELECT *  from  categories  ");

        $runners = DB::connection('mysql')
        ->select("SELECT *  from  runners");
        //dd($runners);
        return view('runners')
        ->with('runner', $runners)
        ->with('category', $categories);
    }

    public function create_runner(Request $request)
    {
        $timestamp = time();

        $runnerId=(string)$timestamp;
        $runnerName = $request->get('runnerName');
        $runnerEmail = $request->get('runnerEmail');
        $runnerPhone = $request->get('runnerPhone');
        $runnerAddress = $request->get('runnerAddress');
        $runnerBusinessName = $request->get('runnerBusinessName');
        $runnerBusinessContact = $request->get('runnerBusinessContact');
        $runnerBusinessEmail = $request->get('runnerBusinessEmail');
        $runnerBusinessAddress = $request->get('runnerBusinessAddress');
        $runnerBusinessCategory = $request->get('runnerBusinessCategory');
        //dd($runnerBusinessName);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $runnerBusinessLogo = time().'.'.$request->image->extension();
        //dd($runnerBusinessLogo);

        $request->image->move(public_path('uploads'), $runnerBusinessLogo);
        
        $values = array(
         'runnerId' => $runnerId,
         'runnerName'=> $runnerName,
          'runnerPhone'=>$runnerPhone,
          'runnerEmail'=>$runnerEmail,
          'runnerAddress'=>$runnerAddress,
          'runnerBusinessName'=>$runnerBusinessName,
          'runnerBusinessContact'=>$runnerBusinessContact,
          'runnerBusinessEmail'=>$runnerBusinessEmail,
          'runnerBusinessAddress'=>$runnerBusinessAddress,
          'runnerBusinessCategory'=>$runnerBusinessCategory,
          'runnerBusinessLogo'=>$runnerBusinessLogo);
        //dd($values);
        DB::table('runners')->insert($values);
        return redirect('runners')
            ->with('success', 'A Runner has been successfully created');
    }
}
