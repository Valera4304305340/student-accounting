<!DOCTYPE html>
<html>
<head>
    <title>Страны и города</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Страны и города</h1>
    
    @foreach ($countries as $country)
        <h2>{{ $country->name }}</h2>
        <ul>
            @foreach ($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>