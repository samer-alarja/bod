  <!-- print($user); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>control</title>
    <style> 
    .box{ width: 600px;
      margin: 0 auto;
      border: 1px solid #ccc;
    } 
    h3{text-align: center;}
    button{width: 110px;}
</style>
</head>
<body>
 <br />
 <div class="container box">
  <h3 >welcome</h3><br />
<a href="{{ route('name.menu')}}" ><button type="button" class="btn btn-primary">menu</button></a>
<a href="{{ route('name.title')}}" ><button type="button" class="btn btn-primary">title</button></a>
<button type="button" class="btn btn-success">title</button>
<button type="button" class="btn btn-danger">title</button>
<button type="button" class="btn btn-warning">title</button>

<br >
  @if(isset(Auth::user()->email))
  <div class="alert alert-danger success-block">
    <strong>admin: {{Auth::user()->name }}</strong>
    <br />
    <a href="{{url('/login/logout') }}">Logout</a>
  </div>
    @else 
    <script>window.location = "/login";</script>
    @endif
</body>
</html>