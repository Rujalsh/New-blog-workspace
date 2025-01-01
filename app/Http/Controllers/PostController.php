<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //Render a list of a resource
    return view('posts.index', [
        'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(6)->withQueryString(), 

    ]);
    }

    public function show(Post $post){
        //Find a post by its slug and pass it to a view called post
        return view('posts.show', [
        'post' => $post
    ]);
    }

    // index, show, create, store, edit, update, destroy
    
    public function create( )
    {
        return view('posts.create');
        }
    }   
