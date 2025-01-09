<?php

namespace App\Http\Controllers;

use id;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index',[
            'posts' => Post::paginate(50)
        ]);
    }

    public function create( )
    {
        return view('admin.posts.create');
    }


    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts','slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories','id')],
        ]);

        $attributes['user_id'] = Auth::id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/')->with('success','Post created!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit',['post' => $post] );
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts','slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories','id')],
        ]);

        // if(request()->hasFile('thumbnail')){
        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success','Post updated!');
    }

    public function destory(Post $post)
    {
        $post->delete();

        return back()->with('success','Post deleted!');
    }
}


// namespace App\Http\Controllers;

// use App\Models\Post;
// use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;


// class AdminPostController extends Controller
// {
//     public function index()
//     {
//         return view('admin.posts.index',[
//             'posts' => Post::paginate(50)
//         ]);
//     }

//     public function create( )
//     {
//         return view('admin.posts.create');
//     }


//     public function store()
//     {
        
//         $attributes = $this->validatePost();
        
//         $attributes['user_id'] = Auth::id();
//         $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

//         Post::create($attributes);

//         return redirect('/');
//     }

//     public function edit(Post $post)
//     {
//         return view('admin.posts.edit',['post' => $post] );
//     }

//     public function update(Post $post)
//     {
//         $attributes = $this->validatePost($post);

//         if(request()->hasFile('thumbnail')){
//             $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
//         }
        

//         $post->update($attributes);

//         return back()->with('success','Post updated!');
//     }

//     public function destroy(Post $post)
//     {
//         $post->delete();

//         return back()->with('success','Post deleted!');
//     }


//     protected function validatePost(?Post $post = null):array
//         {

//         $post ??= new Post();

//         return request()->validate([
//             'title' => 'required',
//             'thumbnail' => $post->exists ? 'image' : 'required|image',
//             'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
//             'excerpt' => 'required',
//             'body' => 'required',
//             'category_id' => ['required',Rule::exists('categories', 'id')],
//             'published_at' => 'required',
//         ]);
//     }
// }
