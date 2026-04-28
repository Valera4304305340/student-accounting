<html>
<head>
    <title>{{ ->title }}</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; max-width: 800px; margin: 0 auto; }
        .post { border: 1px solid #ccc; padding: 20px; border-radius: 8px; margin-top: 20px; }
        .post h1 { color: #333; margin-top: 0; }
        .post .meta { color: #666; font-size: 14px; margin-bottom: 20px; }
        .post .content { line-height: 1.6; }
        .back { margin-top: 20px; display: inline-block; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="post">
        <h1>{{ ->title }}</h1>
        <div class="meta">
            <span>ID: {{ ->id }}</span> |
            <span>Создано: {{ ->created_at }}</span> |
            <span>Лайков: {{ ->likes ?? 0 }}</span>
        </div>
        <div class="content">
            <p>{{ ->text ?? 'Текст статьи отсутствует' }}</p>
        </div>
    </div>
    
    <a href="/post/all" class="back">← Назад к списку статей</a>
    <br>
    <a href="/blade" class="back">← Назад к главной</a>
</body>
</html>
