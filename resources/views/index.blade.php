@extends('b.Hello')
<body>
@section('title','index.blade.php')
@section('content')
<table>
  @foreach($itemsas$item)
  <tr>
    <th>name</th>
    <td>{{$item->name}}</td>
  </tr>
  <tr>
    <th>age</th>
    <td>{{$item->age}}</td>
  </tr>
  @endforeach
</table>

@endsection
</body>
</html>