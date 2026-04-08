<!DOCTYPE html>
<html>
<head>
    <title>Задание 2</title>
    <style>
        .highlight { background: yellow; padding: 10px; }
    </style>
</head>
<body>
    <h1>Задание 2: CSS класс из переменной</h1>
    
    <!-- Вставляем значение переменной в атрибут class -->
    <div class="{{ $cssClass }}">
        Этот блок имеет класс "{{ $cssClass }}"
    </div>
    
    <a href="/blade">← Назад</a>
</body>
</html>