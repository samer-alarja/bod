<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css">
   <style>body 
   { margin: 0;
    background-color:rgb(230, 255, 255)}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding:0;
  background-color:rgb(31, 31, 96);
  width: 100%;
  height: 75px;
  position: sticky;
  top: 0;
  font-size: 18px;
  z-index: 1;
  overflow: hidden;
}
ul.topnav li a {
  font-size:large;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin: 10px 25px 0 0 ;
}
ul.topnav li a:hover:not(.active) {
  background-color: #111;}
.a{float:right;
  border-radius: 42px;
  background-color:rgb(62, 62, 193) ; 
  margin-right: 70px;
}
  .change{width: 50px;
  text-align: center ;}
  .final{ color:aqua;float:left;}
  h1{font-size: 60px;
  color: white;
  margin-top: 80px;}
  table, td, th {  
  border: 2px solid white;
  text-align: center;
  padding: 10px;
  border-collapse: collapse;
  width:25%;
  color: white;
  margin:40px 0 0 37% ;
}
input[type=text],input[type=password], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 24px;
  box-sizing: border-box;
  width: 100%;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 24px;
  cursor: pointer;
  width: 100%;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
    <title>Document</title>
</head>
<body>
<ul class="topnav">
<li><a  class="a" href="#home">buy Tickets</a></li>
  <li><a  style="float:right" href="#home">Contact</a></li>
  <li><a style="float:right" href="#news">Venue</a></li>
  <li><a style="float:right" href="#contact">Pricing</a></li>
  <li><a style="float:right" href="#about">Schedules</a></li>
  <li><a style="float:right" href="#about">Speakers</a></li>
  <li><a style="float:right" href="#about">About</a></li>
  <li><a style="float:right ; color:aqua" href="#about">Home</a></li>
  <li><a class="final" style="color:aqua; margin:0 0 5px 110px" href="#about">LEADERSHIP<br> EVENT</a></li>
</ul>
<div 
style="background:url('https://picsum.photos/1200/920/?random'); background-size:cover; background-attachment:fixed; height:800px;  top: 0;   padding: 80px;">
<h1 class="heading mt-5 pt-5 text-center -bottom-3"><ins style="color: aqua;">LEADERSHIP</ins> CONFERENCE<br>2022</h1>
<table>
  <tr>
    <th>July 12 to 18,2022</th>
    <th>Times Square,NY</th>
  </tr>
</table>
</div>
<container>
  <div class="row" style="text-align:center">
    <div class="col-md-6">
<iframe  src="https://www.youtube-nocookie.com/embed/BGkL2Pq-g3A?start=51" title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:750px;height:350px"></iframe>
    </div>
    <div class="col-md-6">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.998006639631!2d35.91790585329754!3d31.98806950136607!2m3!1f0!2f0!3f0!3m2!1i
      1024!2i768!4f13.1!3m3!1m2!1s0x151b60007211256b%3A0x50e874e23772e562!2zWFdROCsyUVjYjCDYudmF2ZHYp9mG!5e0!3m2!1sar!2sjo!4v1652209046379!5m2!1sar!2sjo"
       width="750px" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div></div></div>
<div 
style="background:url('https://picsum.photos/1200/920/?random'); background-size:cover; background-attachment:fixed; height:800px;padding:100px">
  <form method="post" action="{{ route('name.login')}}" style=" border-radius: 25px;background-color: #f2f2f2;width:600px;margin:0 0 0 400px;padding:50px"> 
  @csrf
  <h2>admin accont</h2><hr>
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
  <label for="lname">name</label>
    <input type="text" id="lname" name="name" placeholder="Your name..">

    <label for="lemail">email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

    <label for="country">password</label>
    <input type="password" id="pass" name="password" placeholder="Your password..">

    <input type="submit" value="Submit">
  </form>
</div>

<footer> 
<container>
    <div class="row" style="height: 90px; text-align: center ;margin-top:90px; ">
        <div class="col-md-6" style="color:aqua;font-size:larger">LEADERSHIP<br> EVENT</div>
        <div class="col-md-6">LEADERSHIP CONFERENCE 2022</div>
    </div><hr width="87%">

    <div class="row" style="height:210px ; ">
        <pre class="col-md-6" style="font-family: 'Courier New', monospace;font-size:15px;text-align: center;margin-top:60px;"> Our Story   Code of Conduct   Privacy and Terms   Contact</pre>
        <div class="col-md-6">
        <pre style="margin:30px 0 0 110px ;font-family: Verdana, sans-serif;">        Copyright © 2022 Leadership Event Co., Ltd.
        All Rights Reserved.

        Design: TemplateMo</pre>
  </div>  
</container>
</footer>
</body>
</html>