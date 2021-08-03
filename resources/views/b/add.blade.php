@extends('b.Hello')
<body>
  @section('title'.index.blade.php)
  @section('content')
  @if(count($errors)>0)
  <ul>
    @foreach($errors->all()as$error)
    <li>
      {{$error}}
    </li>
    @endforeach
  </ul>
  @endif
  <form action="/add" method="POST">
  <table>
    @csrf
    <tr>
      <th> name </th>
      <td>
        <input type="text" name="name">
      </td>
  </tr>
    <tr>
      <th> age </th>
      <td>
        <input type="text" name="age">
      </td>
  </tr>
  <tr>
    <th></th>
    <td><button>送信</button></td>
  </tr>
  </table>
</form>
@endsection
</body>
</html>