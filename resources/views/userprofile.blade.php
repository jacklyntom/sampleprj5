<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
</head>
<body>
<a href="/logout">logout</a>
    <center><h1>REGISTRATION</h1></center>

    <center>
    @foreach($data as $value)
    <form action="/sessupdatedata" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
         <td> <h2>NAME:</h2></td>
         <td><input type="text" name="name" id="name" value="{{$value->name}}"></td>
   </tr>
   <tr>
         <td> <h2>AGE:</h2></td>
         <td><input type="text" name="age" id="age" value="{{$value->age}}"></td>
   </tr>
   <tr>
         <td> <h2>ADDRESS:</h2></td>
         <td><input type="text" name="address" id="address" value="{{$value->address}}"></td>
   </tr> 
   <tr>
         <td> <h2>email:</h2></td>
         <td><input type="text" name="email" id="address" value="{{$value->email}}"></td>
   </tr>
   <tr>
         <td> <h2>PASSWORD:</h2></td>
         <td><input type="text" name="password" id="address" value="{{$value->password}}"></td>
   </tr>
   <tr> 
   <td>
   <h2>IMAGE:</h2></td>
   <td><input type="file" name="image" id="image"><img src="{{asset('upload/'.$value->image)}}" height="100px" width="100px""></td></tr>
   
   <tr>
         <td><input type="submit" name="register" id="register"></td>
   </tr>
   </table>
    </form>
    @endforeach
    </center>

   



</body>
</html>


