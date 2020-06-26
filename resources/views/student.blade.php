<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>School</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">

                <div ><h3 align="center" class="text-primary">Student table<h3></div>

                <form method="GET"  action='{{url('/store')}}'>         {{-- this action leads to route-->students-controller-->include database --}}

                    <input type="number" name="reg_no" class="form-control" placeholder="Registor Number">
                    <input type="text" name="name"  class="form-control" placeholder="Student Name">
                    <input type="number" name="mark" class="form-control" placeholder="Student marks">
                    <input type="text" name="grade" class="form-control" placeholder="Student Grade">
                    <input type="text" name="Student_class" class="form-control" placeholder="Student Class">
                    <input type="submit" class="btn btn-primary">
                    <a class="btn btn-primary" href="/display">DATA</a>       {{-- this action leads to route-->controller-->select data--> view (data)--}}

                </form>


        <div>
    </body>
</html>
