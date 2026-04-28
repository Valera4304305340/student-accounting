<!DOCTYPE html>
<html>
<head>
    <title>Список статей</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .back { margin-top: 20px; display: inline-block; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Список всех статей</h1>
    
    <<table>
    <tr>
        <th>ID</th>
        <th>Заголовок (title)</th>
        <th>Краткое описание (desc)</th>
    </tr>
    
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
        <td>{{ Str::limit($post->text, 50) }}</td>
    </tr>
    @endforeach
</table>
    
    <a href="/blade" class="back">← Назад к главной</a>
</body>
</html>
