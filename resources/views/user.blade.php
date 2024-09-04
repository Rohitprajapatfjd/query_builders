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
    <h1> {{$item->id}}</h1>
        <h1> {{$item->name}}</h1>
        <h1> {{$item->email}}</h1>
        <h1> {{$item->city}}</h1>
    @empty
        <h1>No Data Found</h1>
    @endforelse
</body>
</html>