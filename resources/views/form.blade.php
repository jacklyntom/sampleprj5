<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
    h1,h2{
            color: #990033;
      }
 body {
             background-color: lightgrey;
      }
</style>
</head>
<body>

    <center><h1>registration</h1></center>
    <center><form action="/insert" method="post" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
         <td> <h2>NAME:</h2></td>
         <td><input type="text" name="name" id="name"></td>
   </tr>
   <tr>
         <td> <h2>AGE:</h2></td>
         <td><input type="text" name="age" id="age"></td>
   </tr>
   <tr>
         <td> <h2>ADDRESS:</h2></td>
         <td><input type="text" name="address" id="address"></td>
   </tr> 
   <tr>
         <td> <h2>EMAIL:</h2></td>
         <td><input type="text" name="email" id="email"></td>
   </tr> 
   <tr>
         <td> <h2>PASSWORD:</h2></td>
         <td><input type="password" name="password" id="password"></td>
   </tr> 
   <tr>
   <td><h2>FILETYPE:</h2></td>
   <td><input type="file" id="image" name="image"></td>
   </tr>
   <tr>
         <td><input type="submit" name="register" id="register"></td>
   </tr>
   </table>
    </form>
    </center>

</body>
</html>
