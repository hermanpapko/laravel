<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, this is a blade template.</h1>
    <p>A great numer is {{ 2 + 2 }}</p>
    <p>The current year is {{ date('Y') }}</p>

    <h3>{{$name}}</h3>
    <h2>{{ $catname }}</h2>

    <ul>
        @foreach($allAnimals as  $animal)
            <li>{{ $animal }}</li>
            @endforeach
    </ul>

    <a href="/about">Go to the about page</a>
</body>
</html>
