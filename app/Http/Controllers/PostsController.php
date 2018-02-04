<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;
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
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
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
            'title' => 'required|unique:posts|max:255',
            'desc' => 'required|min:20',
        ]);

        if($validator->passes()){
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('desc');
            $post->user_id = auth()->user()->id;
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
        $post = Post::find($id);
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
        $post = Post::find($id);
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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
        ]);

        if($validator->passes()){
            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('desc');
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
        $post = Post::find($id);
        return view('posts.delete')->with('post', $post);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('dashboard');
    }
}
