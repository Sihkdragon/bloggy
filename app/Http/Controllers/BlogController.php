<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getDB = DB::table('blogs')->where('id', '1')->get();
        $data = [
            'title' => $getDB[0]->title,
            'author' => $getDB[0]->author,
            'description' => $getDB[0]->description,
            'body' => $getDB[0]->body,
            'likes' => $getDB[0]->likes,
            'TITLE' => 'Home'
        ];
        // dd($data['title']);
        return view('Blog.blog', $data);
    }
    public function bloglist()
    {
        $data = DB::table('blogs')->get();
        return view('Blog.bloglist', [
            'blogs' => $data,
            'TITLE' => 'Bloglist'
        ]);
        // dd($blogs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('Blog.dashboard', [
            'TITLE' => 'Dashboard'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('blogs')->insert([
        //     'title' => $request->title,
        //     'author' => $request->author,
        //     'likes' => $request->likes,
        //     'description' => $request->description,
        //     'body' => $request->body,
        //     'created_at' => now($tz = 'GMT+7'),
        //     'updated_at' => now($tz = 'GMT+7')
        // ]);
        // return redirect('/');
        dd($request->body);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $identifier)
    {
        $data = DB::table('blogs')->where('id', $identifier)->get()->first();
        // dd($data->id);
        return view('Blog.preview', [
            'blog' => $data,
            'TITLE' => 'Home'
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
