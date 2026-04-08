<html>
<head>
    <title>Все задания Blade</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; max-width: 1200px; margin: 0 auto; }
        h1 { color: #333; text-align: center; }
        .tasks { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px; margin-top: 30px; }
        .task { background: #007bff; color: white; padding: 15px; border-radius: 8px; text-decoration: none; text-align: center; font-weight: bold; }
        .task:hover { background: #0056b3; }
    </style>
</head>
<body>
    <h1>📚 Все 36 заданий Blade</h1>
    <div class="tasks">
        @for ($i = 1; $i <= 36; $i++)
            <a href="/blade/task$i" class="task">Задание $i</a>
        @endfor
    </div>
</body>
</html>
