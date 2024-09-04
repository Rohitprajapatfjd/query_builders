<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      @forelse ($admin as $item)
          <h1> {{$item->name}} |  {{$item->email}} | {{$item->city}}  <a href={{route('users',$item->id)}}>Show</a> </h1>
      @empty
          <h1>No data Found</h1>
      @endforelse

</body>
</html>
