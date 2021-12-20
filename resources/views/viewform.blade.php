<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<style>
body {
             background-color: lightgrey;
      }
      th,h2{
            color: #990033;
      }
      a {
  color: green;
}
</style>
<body>
<center>
<table class="table table-bordered">

<tr>
   <th><h2>NAME</h2></th>
    <th><h2>AGE<h2></th>
    <th><h2>ADDRESS</h2></th>
    <th><h2>EMAIL</h2></th>
    <th><h2>PASSWORD</h2></th>
    <th><h2>EDIT</h2></th>
    <th><h2>DELETE</h2></th>
    <th><h2>IMAGE</h2></th>
</tr>
@foreach($data as $value)
<tr>
<td>{{$value->name}}</td>
<td>{{$value->age}}</td>
<td>{{$value->address}}</td>
<td>{{$value->email}}</td>
<td>{{$value->password}}</td>
<td><img src="{{asset('upload/'.$value->image)}}" height="100px" width="100px"></td>
<td><a href="/edit/{{$value->id}}">EDIT</a></td>
<td><a href="/delete/{{$value->id}}">DELETE</a></td>
</tr>
@endforeach 
</table>
</center>
</body>
</html>