<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @isset($data)
    @foreach($data as $item)
        <div>Title: {{ $item['title'] }} </div>
        <div>Body: {{ $item['body'] }} </div>
        @endforeach
        @endisset
</body>
</html>