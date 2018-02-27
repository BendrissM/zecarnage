<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\Adminsvip;
use Response;

class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search');
        $posts = Adminsvip::where('lastRecordedName','like','%'.$search.'%')
                    ->orderBy('id', 'desc')
                    ->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'steamID' => 'required',
            'lrn' => 'required',
            'flags' => 'required',
            'dateEx' => 'required',
        ]);
        
        //if there is no errors store data in database
        if($validator->passes()){
            $post = new Adminsvip;
            $post->steamID = $request->input('steamID');
            $post->lastRecordedName = $request->input('lrn');
            $post->flags = $request->input('flags');
            $post->DateExpiration = $request->input('dateEx');
            if($post->save()){
                return Response::json(['success' => '1']);
            }
        }
        return Response::json(['errors' => $validator->errors()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Adminsvip::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Adminsvip::find($id);
        return view('posts.edit')->with('post', $post);
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
        $post = Adminsvip::find($id);
        $validator = Validator::make($request->all(), [
            'steamID' => 'required|unique:adminsvip,steamID,'.$post->id,
            'lrn' => 'required',
            'flags' => 'required',
            'dateEx' => 'required',
        ]);

        if($validator->passes()){
            $post->steamID = $request->input('steamID');
            $post->lastRecordedName = $request->input('lrn');
            $post->flags = $request->input('flags');
            $post->DateExpiration = $request->input('dateEx');
            if($post->save()){
                return Response::json(['success' => '1']);
            }
        }
        return Response::json(['errors' => $validator->errors()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deletePost($id)
    {
        $post = Adminsvip::find($id);
        return view('posts.delete')->with('post', $post);
    }

    public function destroy($id)
    {
        $post = Adminsvip::find($id);
        $post->delete();
        return redirect('dashboard');
    }
}
