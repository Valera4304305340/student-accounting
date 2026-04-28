<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Получение всех статей с сортировкой
    public function getAll($order = "date", $dir = "desc")
    {
        if (!in_array($dir, ["asc", "desc"])) {
            $dir = "desc";
        }
        
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
        
        $posts = Post::orderBy($orderBy, $dir)->get();
        return view("post.all", compact("posts"));
    }
    
    // Получение одной статьи
    public function getOne($id)
    {
        $post = Post::findOrFail($id);
        return view("post.one", compact("post"));
    }
    
    // Создание новой статьи
    public function newPost(Request $request)
    {
        if ($request->has("submit")) {
            $post = new Post();
            $post->title = $request->title;
            $post->slug = $request->slug ?? str_replace(" ", "-", strtolower($request->title));
            $post->text = $request->text;
            $post->likes = 0;
            $post->save();
            
            return redirect("/post/all")->with("success", "Статья \"" . $post->title . "\" создана!");
        }
        
        return view("post.new");
    }
    
    // Изменение статьи с id=1
    public function changeFirst()
    {
        $post = Post::find(1);
        if ($post) {
            $oldTitle = $post->title;
            $post->title = "Измененный заголовок статьи с id 1";
            $post->save();
            return redirect("/post/all")->with("success", "Статья id=1 изменена! Было: \"$oldTitle\"");
        }
        return redirect("/post/all")->with("error", "Статья с id=1 не найдена");
    }
    
    // Редактирование статьи
    public function editPost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        if ($request->has("submit")) {
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->text = $request->text;
            $post->save();
            
            return redirect("/post/all")->with("success", "Статья #" . $id . " \"" . $post->title . "\" обновлена!");
        }
        
        return view("post.edit", compact("post"));
    }
    
    // Массовые изменения
    public function massUpdate()
    {
        $count = Post::query()->update(["likes" => \DB::raw("likes + 10")]);
        return redirect("/post/all")->with("success", "Массовое обновление: {$count} статьям добавлено 10 лайков!");
    }
    
    public function massDelete()
    {
        $count = Post::where("likes", 0)->delete();
        return redirect("/post/all")->with("success", "Удалено {$count} статей с нулевыми лайками!");
    }
}
