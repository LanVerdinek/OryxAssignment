<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //tako se bo uporabljala Post.php datoteka, stem lahko uporabljamo model funkcije v tej datoteki
use DB; //če hočemo pisati mysql querije

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Post::all(); bo vrnil en array z vsemi podatki iz naše Post tabele v bazi iz .env datoteke
        $posts = Post::orderBy('created_at', 'asc')->paginate(3);
        //$posts = DB::select('SELECT * FROM posts');
        return view('FAQ.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FAQ.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ta del bo uporabljal podatke iz formov, spodnja validacija ustavi uporabnika če ne izpolne vsega
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Tukaj se post ustvari in je interakcija z podatkovno bazo
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('FAQ')->with('success', "Post Created");
    }

    /*
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        $post = Post::find($id);
        return view('FAQ.show')->with('post', $post);
    }
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('FAQ.edit')->with('post', $post);
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        //Tukaj se post ustvari in je interakcija z podatkovno bazo
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('FAQ')->with('success', "Post Updated");
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

        return redirect('FAQ')->with('success', "Post Removed");
    }
}
