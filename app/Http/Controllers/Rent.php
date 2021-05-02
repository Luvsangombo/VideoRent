<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class Rent extends Controller
{
    public function doRent(Request $request){
        if(session('user_id')){
            DB::table('rents')->insert([
                'video_id' => intval($request->video_id),
                'user_id' => session('user_id'),
                'rentedDate' => Carbon::now(),
                'endDate' => Carbon::now()->addDays(),
                'director' => $request->director,
                'price' => $request->price,
                'other' => session('user_phone'),
            ]);
        $video = DB::table('videos')->where('id', [$request->video_id])->first();
        return view('rent' , ['request'=>$video]);}
        else return redirect('login');
    }
}
