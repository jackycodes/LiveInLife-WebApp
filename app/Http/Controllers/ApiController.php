<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

use App\Http\Requests;

class ApiController extends Controller
{
    public function index()
    {
    }

    public function getPosts()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function storePost(Request $request)
    {
        $post = new Post();

        $post->address = $request->input('address');
        $post->city = $request->input('city');
        $post->province = $request->input('province');
        $post->zip = $request->input('zip');
        $post->bedrooms = $request->input('bedrooms');
        $post->sqfeet = $request->input('sqfeet');
        $post->price = $request->input('price');

        $post->save();
    }
}
