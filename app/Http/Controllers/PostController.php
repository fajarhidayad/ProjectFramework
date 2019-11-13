<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tags;
use Illuminate\Http\Request;
use App\Helpers\ImageHelper;
use Carbon\Carbon;
use Validator;
use File;
use Auth;
use Image;
use Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::get();
        return view('upload.upload', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png',
            'title' => 'required|string|max:100',
            'tags' => 'required',
        ]);
        
        $image = $request->file('foto');
        $extension = $image->getClientOriginalExtension();
        $fileName = Carbon::now()->timestamp . '_' . Auth::user()->id . '.' . $extension;
        Storage::disk('public')->put($fileName,  File::get($image));

        $id_user = Auth::user()->id;
        $post = new Post;
        $post->foto = $fileName;
        $post->title = $request->title;
        $post->sumber = $request->sumber;
        $post->id_tag = $request->tags;
        $post->id_user = $id_user;
        $post->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tags::all();
        $post = Post::find($id);
        return view('upload.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'title' => 'required|string|max:100',
            'tags' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->sumber = $request->sumber;
        $post->id_tag = $request->tags;

        $post->save();

        return redirect()->route('home');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('home');
    }
}
