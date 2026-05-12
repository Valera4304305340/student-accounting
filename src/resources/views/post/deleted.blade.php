<!DOCTYPE html>
<html>
<head>
    <title>Корзина статей</title>
    <style>
        body { font-family: Arial; padding: 20px; max-width: 1200px; margin: 0 auto; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #f2f2f2; }
        .success { background: #d4edda; padding: 10px; margin-bottom: 20px; }
        .btn-restore { background: #28a745; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-force { background: #dc3545; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
    </style>
</head>
<body>
    <h1> Корзина (удаленные статьи)</h1>
    
    @if(session('success'))
        <div class="success"> {{ session('success') }}</div>
    @endif
    
    <a href="/post/all">← Назад к списку</a>
    
    @if($deletedPosts->count() > 0)
        <table>
            <tr><th>ID</th><th>Заголовок</th><th>Удалена</th><th>Действия</th></tr>
            @foreach ($deletedPosts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->deleted_at }}</td>
                <td>
                    <a href="/post/restore/{{ $post->id }}" class="btn-restore"> Восстановить</a>
                    <a href="/post/force-delete/{{ $post->id }}" class="btn-force" 
                       onclick="return confirm('Удалить навсегда?')"> Удалить навсегда</a>
                </td>
            </tr>
            @endforeach
        </table>
    @else
        <p>Корзина пуста.</p>
    @endif
</body>
</html>