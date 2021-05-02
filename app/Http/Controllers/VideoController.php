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

    public function showTrailer($id)
    {
        $video= DB::table('videos')->get()->where('id', $id)->first();   
        return view('video_trailer', ['video'=>$video]);

    }
    public function search(Request $request)
    {
        error_log($request->name);
        $videos = DB::table('videos')->where('name','LIKE','%'.$request->name.'%')->get();
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
