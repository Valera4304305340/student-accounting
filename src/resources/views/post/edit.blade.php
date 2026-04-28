<!DOCTYPE html>
<html>
<head>
    <title>Редактирование статьи</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, textarea { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        textarea { height: 150px; }
        button { background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        .back { margin-top: 20px; display: inline-block; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Редактирование статьи #{{ $post->id }}</h1>
    
    <form action="/post/edit/{{ $post->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Заголовок:</label>
            <input type="text" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label>Slug:</label>
            <input type="text" name="slug" value="{{ $post->slug }}">
        </div>
        <div class="form-group">
            <label>Текст статьи:</label>
            <textarea name="text">{{ $post->text }}</textarea>
        </div>
        <button type="submit" name="submit">Сохранить изменения</button>
    </form>
    
    <br>
    <a href="/post/all" class="back">← Назад к списку статей</a>
    <br>
    <a href="/blade" class="back">← Назад к главной</a>
</body>
</html>
