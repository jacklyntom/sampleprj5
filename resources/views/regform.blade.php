<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    h1,h2{
            color:  #862d59;
      }
 body {
             background-color:#009999 ;
      }
</style>
</head>
<body>

    <center><h1>REGISTRATION</h1></center>
    <center>
    @foreach($data as $value)
    <form action="/updatedata/{{$value->id}}" method="post" enctype="multipart/form-data">
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
