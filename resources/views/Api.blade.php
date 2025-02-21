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
        <div> {{ $item['title'] }} </div>
        @endforeach
        @endisset
</body>
</html>