<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
    <title>Список статей</title>
    <style>
        body { font-family: Arial; padding: 20px; max-width: 1200px; margin: 0 auto; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #f2f2f2; }
        .success { background: #d4edda; padding: 10px; margin-bottom: 20px; }
        .error { background: #f8d7da; padding: 10px; margin-bottom: 20px; }
        .btn-edit { background: #ffc107; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-delete { background: #dc3545; color: white; padding: 5px 10px; text-decoration: none; border-radius: 3px; }
        .btn-new { background: #28a745; color: white; padding: 10px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Список статей</h1>
    
    @if(session('success'))
        <div class="success"> {{ session('success') }}</div>
    @endif
    
    @if(session('error'))
        <div class="error"> {{ session('error') }}</div>
    @endif
    
    <a href="/post/new" class="btn-new"> Создать</a>
    <a href="/post/deleted" class="btn-new" style="background:#6c757d">🗑️ Корзина</a>
    
    <table>
        <tr><th>ID</th><th>Заголовок</th><th>Текст</th><th>Лайки</th><th>Действия</th></tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ Str::limit($post->text ?? 'Нет текста', 50) }}</td>
            <td>{{ $post->likes }}</td>
            <td>
                <a href="/post/edit/{{ $post->id }}" class="btn-edit"></a>
                <a href="/post/del/{{ $post->id }}" class="btn-delete" onclick="return confirm('Удалить «{{ $post->title }}»?')">🗑️</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>


