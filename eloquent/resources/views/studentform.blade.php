<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .body{
        background-color:lightgrey;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">

            <div class="card-header">
                <h4>Eloquent Model</h4>
            </div>

            <div class="card-body">
                <h5 class="card-title">Student Data</h5>

                @if(count($errors)>0)
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                <li>{{$errors}}</li>
                @endforeach
                </ul>
                </div>
                @endif

                @if(\Session::has('success'))
                <div class="alert alert-success">
                <p>{{\Session::get('success')}}</p>
                </div>
                @endif

                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="/insertdata" class="btn btn-success badge-pill" style="width:80px;">ADD</a>
                    </div>
                </div>
                <br>

                <table class="table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Course</th>
                            <th scope="col">Mobile</th> 
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th>{{$student->id}}</th>
                        <th>{{$student->name}}</th>
                        <th>{{$student->address}}</th>
                        <th>{{$student->course}}</th>
                        <th>{{$student->mobile}}</th>
                        <th>
                            <a href="/editdata/{{$student->id}}" class="btn btn-success badge-pill" style="width:80px;">EDIT</a>
                            <a href="/delete/{{$student->id}}" class="btn btn-success badge-pill" style="width:80px;">DELETE</a>
                        </th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</body>
</html>