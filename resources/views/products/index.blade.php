<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title> Products </title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<h1> !!!!! </h1> 

@foreach($data as $item)
<p>
  {{ $item }}
</p>

@endforeach
</body>
</html>