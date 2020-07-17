<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- /css/bootstrap.css"> -->

</head>
<body>
<div class="bg-info text-white p-5 mb-3">
<a href="{{route('posts.index')}}" class="btn btn-primary">Home</a>
<a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
<form class="d-inline-block float-right" action="route('logout')" method="post">
@csrf
<a href="{{route('login')}}" class="btn btn-primary">Logout</a>
</form>
</div>
<div class="container">
@yield('content')
</div>
<div class="bg-dark text-white p-4 text-center">
All Rights Reserved Paresh{{date('Y')}}
</div>
</body>
</html>