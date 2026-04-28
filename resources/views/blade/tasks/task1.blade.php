<!DOCTYPE html>
<html>
<head>
    <title>Задание 1</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .back { margin-top: 20px; display: inline-block; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Задание 1: Вывод переменных</h1>
    <div style="border: 1px solid #ccc; padding: 20px; border-radius: 5px;">
        <p><strong>Абоба</strong> {{ $name }}</p>
        <p><strong>Возраст:</strong> {{ $age }} лет</p>
        <p><strong>Зарплата:</strong> {{ $salary }} ₽</p>
    </div>
    <a href="/blade" class="back">← Назад к списку заданий</a>
</body>
</html>