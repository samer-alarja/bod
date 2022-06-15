
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
   <button type="button" class="close" data-dismiss="alert">x</button>
   <strong>{{$message}}</strong>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('name.login')}}"> 
@csrf
    <label for="lname">name</label>
    <input type="text" id="lname" name="name" placeholder="Your name..">

    <label for="lemail">email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

    <label for="country">password</label>
    <input type="password" id="pass" name="password" placeholder="Your password..">

    <input type="submit" value="Submit">
  </form>
  
 