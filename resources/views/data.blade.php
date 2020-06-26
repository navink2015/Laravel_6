<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>School</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"> </script>

                {{-- <script src="//code.jquery.com/jquery-1.12.3.js"></script>
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
            {{-- <script
                src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <link rel="stylesheet"
                href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <link rel="stylesheet"
                href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"> --}}

                <script>
                    $(document).ready(function() {
                      $('#table').DataTable();
                      $("p").click(function(){ $(this).hide();});
                  } );
                   </script>

</head>
<body>
    <div class="container">

        <div class="p-5">
            <br>
            <h3 align="center"> Student Data<h3>
            <br>
            <table class="table"  id="table" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Registor_number</th>
                    <th>Name</th>
                    <th>Mark</th>
                    <th>Grade</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
               @foreach($datas  as $data)
                    <tr class="item{{$data->id}}">
                       <td>{{$data->id}}</td>
                       <td> {{$data->reg_no}} </td>
                       <td> {{$data->name}} </td>
                        <td>{{$data->mark}}</td>
                        <td>{{$data->grade}}</td>
                        <td>{{$data->class}}</td>
                    </tr>
               @endforeach
            </tbody>
            </table>
        </div>
            <div class="p-5">
            <a class="btn btn-primary  container-fluid p-2" >Back</a>
        </div>
    </div>
</body>

</html>
