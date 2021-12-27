<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create(Category $category)
    {
        //$categories = \DB::table('categories')->get(); 
        //return view('posts.create')->with(['categories' => $categories]);
        
        return view('posts/create')->with(['categories' => $category->get()]);;
    }


    public function store(Request $request)
    {
        $post = new Post;
        $form = $request->all();
        
        $input = $request['title'];
        $post->title = $input;
        
        $input = $request['category'];
        $post->category_id = $input;
        
        $post_id = auth()->id();
        $input = $post_id;
        $post->user_id = $input;
    
        //s3アップロード開始
        $image = $request->file('image');
        // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('picture', $image, 'public');
        // アップロードした画像のフルパスを取得
        $post->image_path = Storage::disk('s3')->url($path);

        $post->save();

        return redirect('/posts/' . $post->id);
    }


    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]); 
    }
    

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
}
