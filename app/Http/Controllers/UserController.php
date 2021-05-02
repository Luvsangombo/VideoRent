<?php

namespace App\Http\Controllers;
use App\Models\Renter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function sign_in(Request $request){
        error_log("###############");
        error_log($request->password);
        $user = new Renter([
            "name" => $request->get('name'),
            "surname" => $request->get('surname'),
            "email" => $request->get('email'),
            "password" => Hash::make($request->password),
            "date_of_birth" => $request->get('date'),
            "username" => $request->get('username'),
            "phone" =>$request->get('phone')
        ]);
        $user->save();
        return redirect('login')->with('success','Амжилттай бүртгүүллээ нэвтэрнэ үү');;

    }
    public function rent_login(Request $request){
        error_log("###############");
        error_log($request->password);
        $user=Renter::where('username', $request->username)->first();
        if(empty($user)){
            
            return redirect()->back()->with('notFound','Хэрэглэгчийн нэр нууц үг олдсонгүй');
        }
        else if(Hash::check($request->password, $user->password)){
            $token = Str::random(60);
            $user->token=$token;
            $user->save();
            $request->session()->put('user_phone', $user->Phone);
            $request->session()->put('user_id', $user->id);
            return redirect('profile');
        }
        else return redirect()->back()->with('notFound','Хэрэглэгчийн нэр нууц үг буруу байна');
    }
    public function sign_up(){
        return view('sign_up');
    }
    public function logout(Request $r){
        if($r->session('user_id')){
            $r->session()->forget('user_id');
            $r->session()->forget('user_phone');
            $r->session()->forget('user');
            return redirect('/');
        }
    }
    public function profile(){
        $user=DB::table('renters')->where('id', session('user_id'))->first();
        $videos=DB::table('rents')->where('user_id', session('user_id'))->get();
        return view('profile', ['user'=>$user, 'videos'=>$videos]);
    }
}
