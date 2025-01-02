<?php

namespace App\Http\Controllers;
use id;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Validation\Rule;

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


    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts','slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories','id')],
        ]);

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/');
    }
}   

