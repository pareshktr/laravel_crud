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
            <form method="POST" action="/add">
                <div class="card-header">
                    <h4>Eloquent Model</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Inserting Data</h5>
                </div>
                {{csrf_field() }}
                <div class="form-group">
                    <label for="">Enter Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="">Enter Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="">Enter Course</label>
                    <input type="text" class="form-control" name="course" placeholder="Course">
                </div>
                <div class="form-group">
                    <label for="">Enter Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                </div>
            </div>

            <div class="modal-footer">
                <a href="" type="button" class="btn btn-secondary">Close</a>
                <button type="submit" name="submit" class="btn btn-secondary">Save Data</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>