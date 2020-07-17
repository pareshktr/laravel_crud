<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        
            <div class="card-header">
                <h4>Eloquent Model</h4>
            </div>

            <div class="card-body">
                <h5 class="card-title">Update Student Data</h5>
            </div>

            <form method="post" action="/update/{{ $students->id }}">
            {{csrf_field() }}
            
            <!-- <input name="_method" type="hidden" value="UPDATE"> -->
            <input type="hidden"  name="id"  value="{{ $students->id }}">

                <div class="form-group">
                    <label for="">Enter Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$students->name}}" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Enter Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{$students->address}}" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="">Enter Course</label>
                    <input type="text" class="form-control" name="course" id="course" value="{{$students->course}}" placeholder="Course">
                </div>
                <div class="form-group">
                    <label for="">Enter Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="{{$students->mobile}}" placeholder="Mobile">
                </div>
            

            <div class="form-group">
                <a href="" type="button" class="btn btn-secondary">Close</a>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>