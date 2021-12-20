<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body  class="bg-secondary text-white">
<div class="container ">
  <center><h2>LOGIN</h2></center>
  <form action="/login" method="post">
  @csrf
  @if (session('message')) <p style="color:red"> {{ session('message') }} </p> @endif
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    </div><br><br>

<div class="container">
  <div class="row">
    <div class="col">
        <input type="password" class="form-control" placeholder="Enter password" name="password">
      </div>
    </div>

    <button type="submit" class="btn btn-success mt-3">Submit</button>
    </div>
  </form>
</div>

</body>
</html>
