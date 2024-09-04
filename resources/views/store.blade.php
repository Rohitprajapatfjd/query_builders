<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($data as $item)
        <h2> {{$item ? $item->id : ""}}  |  {{$item->category}}  | {{$item ?  $item->items  : ""}} | {{$item ?  $item->status  : "" }}</h2>
    @empty
        <h1>No data Found</h1>
    @endforelse
</body>
</html>