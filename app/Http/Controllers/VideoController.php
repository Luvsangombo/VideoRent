<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validateWithBag('post', [
            'catelog_id' => ['required',],
            'section_id' => ['required'],
            'name' => ['required'],
            'price' => ['required'],
            'lenght' => ['required'],
            'director' => ['required'],
            'image_path' => ['required'],
            'highlight_path' => ['required'],
            'description' => ['required'],
        ]);
       $video = new Video([
           "catelog_id" => intval($request->get('type')),
           "section_id" => 1,
           "name" => $request->get('name'),
           "price" => $request->get('price'),
           "length" => $request->get('length'),
           "director" => $request->get('director'),
           "image_path" => $request->get('image'),
           "highlight_path" => $request->get('highlight'),
           "description" => $request->get('des'),

       ]);
       $video->save();
       return redirect()->back()->with('congratulation','Амжилттай хадгалагдлаа');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videos = DB::table('videos')->get()->where('catelog_id', $id);
        return view('videos', ['videos'=>$videos]);
    }
    public function delete($id){
        DB::table('videos')->delete($id);
        return redirect('video_list');
    }

    public function showTrailer($id)
    {
        $video= DB::table('videos')->get()->where('id', $id)->first();   
        return view('video_trailer', ['video'=>$video]);

    }
    public function video_list(){
        if(session('admin_name')){
        $videos = DB::table('videos')->get()->where('section_id', session('admin_section'));   
        return view('video_list', ['video_list'=>$videos]);}
        else return view('admin_login');
    }
    public function search(Request $request)
    {
        error_log($request->name);
        $videos = DB::table('videos')->where('name','LIKE','%'.$request->name.'%')
        ->orwhere('director','LIKE','%'.$request->name.'%')
        ->orwhere('description','LIKE','%'.$request->name.'%')->get();
        return view('videos', ['videos'=>$videos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
