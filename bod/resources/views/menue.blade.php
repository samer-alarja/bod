<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post"> 
  @csrf
  <label for="lname">menu1</label>
    <input type="text" id="lname" name="name" placeholder=""><br><br>

    <label for="lemail">menu2</label>
    <input type="text" id="lname" name="email" placeholder=""><br><br>

    <label for="country">menu3</label>
    <input type="password" id="pass" name="password" placeholder=""><br><br>

    <input type="submit" value="Submit">
  </form>


</body>
</html>