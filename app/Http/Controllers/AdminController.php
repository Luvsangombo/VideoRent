<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function add(Request $request){
        $admin = new Admin([
            "name" => $request->get('name'),
            "section_id" => $request->get('section_id'),
            "password" => Hash::make($request->password),
            "address" => $request->get('address'),
            "username" => $request->get('username'),
            "phone" =>$request->get('phone')
        ]);
        $admin->save();
        return redirect()->back()->with('success','Амжилттай бүртгүүллээ нэвтэрнэ үү');
    }
    public function login(Request $request){
        error_log("###############");
        error_log($request->password);
        $user=Admin::where('username', $request->username)->first();
        if(empty($user)){
            
            return redirect()->back()->with('notFound','Хэрэглэгчийн нэр нууц үг олдсонгүй');
        }
        else if(Hash::check($request->password, $user->password)){
            $request->session()->put('admin_name', $user->name);
            $request->session()->put('admin_section', $user->section_id);
            return redirect('video_list');
        }
        else return redirect()->back()->with('notFound','Хэрэглэгчийн нэр нууц үг буруу байна');
    }
    public function logout(Request $r){
        if($r->session('admin_name')){
            $r->session()->forget('admin_name');
            $r->session()->forget('admin_section');
            return redirect('admin_login');
        }
    }
}
