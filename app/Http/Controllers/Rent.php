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
            $video=DB::table('videos')->where('id',[$request->video_id])->first();
            $rented_times=$video->rented_times+1;
            DB::table('videos')->where('id',[$request->video_id])->update(['rented_times'=>$rented_times]);
        return view('rent' , ['request'=>$video]);}
        else return redirect('login');
    }
    public function list(){
        if(session('admin_name')){
        $rents_list=DB::table('rents')->get();
        return view('rents_list', ['rents_list'=>$rents_list]);}
        else return view('admin_login');
    }
    public function delete($id){
        DB::table('rents')->delete($id);
        return redirect('rents_list');
    }
    public function update($id){
        DB::table('rents')->where('id',[$id])->update(['endDate'=>Carbon::now()->addDays(7)]);
        return redirect('rents_list');
    }
}
