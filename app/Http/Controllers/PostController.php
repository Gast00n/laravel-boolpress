<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    /**
     * POST ARCHIVE
     */

     public function show($slug) {

        $post = Post::where('slug', $slug)->first();

        if(empty($post)) {
            abort('404');
        }
        $user = User::where('id', $post->user_id)->first();
        $username = $user['name'];
        return view('guests.posts.show', compact('post', 'username'));
     }

    /**
     * POST ARCHIVE
     */

     public function index() {

        $posts = Post::orderBy('created_at', 'desc')->get();
         return view('guests.posts.index', compact('posts'));
     }
}
