<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br><br>
<ul>
@foreach($data as $menus)
    <li><a href="/menu_item/{{$menus->id}}" >{{ $menus->menu }}</a></li>
    <!-- <li><a href="{{ route('name.menuiteam')}}" >{{ $menus->menu }}</a></li> -->
@endforeach
</ul>
<!-- <a href="#" ><button type="button" class="btn btn-primary">update the menu</button></a> -->


</body>
</html>


