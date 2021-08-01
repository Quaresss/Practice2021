<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class BaseController extends Controller
{
 public function home()
 {
     return view('home');
 }

 public function news()
 { 

     $categories=Category::orderBy('title')->get();
     $posts=Post::paginate(4);
     return view('news',[
         'posts'=>$posts,
         'categories'=>$categories,
        ]);
 }
 


     public function getPostsByCategory($slug)
     {  
        $categories=Category::orderBy('title')->get();
        $current_category= Category::where('slug',$slug)->first();

        return view('news',[
            'posts'=>$current_category->posts()->paginate(4),
            'categories'=>$categories,
           ]);
     }
     public function getPost($slug_category,$slug_post)
     {
         $post=Post::where('slug', $slug_post)->first();
         $categories=Category::orderBy('title')->get();
         return view('show-post',[
             'post'=>$post,
             'categories'=>$categories,
             'slug_category'=>$slug_category,    
         ]);
     }
     

    
}

