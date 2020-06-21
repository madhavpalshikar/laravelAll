<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Posts;

class PostsController extends Controller
{
    //
    public function publish(Request $request){
        echo "working <br>";
        if ($request->is('posts/*')) { // checking route

            if($request->has('title')) {
                echo "Title is present! <br>";
            }

            //gettting all fields
            print_r($request->input());
            echo "<br>";

            //gettting uri
            $uri = $request->path();
            print_r($uri);
            echo "<br>";

            //gettting url
            $url = $request->url();
            print_r($url);
            echo "<br>";

            $post = new Posts();
            $post->title = $request->input('title');
            $post->post = $request->input('post');
            $post->tags = $request->input('tags');
            $post->save();

            echo "Post is saved!";
        }
    }
}
