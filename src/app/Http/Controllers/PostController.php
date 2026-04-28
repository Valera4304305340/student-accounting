<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function getAll($order = "date", $dir = "desc")
    {
        switch ($order) {
            case "id":
                $orderBy = "id";
                break;
            case "title":
                $orderBy = "title";
                break;
            case "date":
            default:
                $orderBy = "created_at";
                break;
        }
        
        $dir = in_array($dir, ["asc", "desc"]) ? $dir : "desc";
        $posts = Post::orderBy($orderBy, $dir)->get();
        
        return view("post.all", compact("posts"));
    }
    
    public function getOne($id)
    {
        $post = Post::findOrFail($id);
        return view("post.one", compact("post"));
    }
}