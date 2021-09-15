<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
<div class="container pt-5">
    <div class="card">
        <div class="card-header text-center">
            <h3 class="card-title">
                Crud Operations.. Hello {{strtoupper(session('username'))}}
            </h3>
            <a class="btn btn-outline-dark  " href="{{URL::route('insert')}}">Insert Data</a>
            <a class="btn btn-outline-danger" href="{{URL::route('logout')}}">Logout</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center  ">
                <thead>
                    <th>Sr No..</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Action</th>
                </thead>
                <tbody><?php $i=1; ?>
                @foreach($data as $data)
                    <tr>
                        <input type="hidden" name="id" value="{{$data['id']}}">

                        <td>{{$i++}}</td>
                        <td>{{$data['name']}}</td>
                        <td>{{$data['email']}}</td>
                        <td>{{$data['password']}}</td>
                        <td>{{$data['gender']}}</td>
                        <td>{{$data['status']}}</td>
                        <td>{{$data['category']}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{'insert/'.$data['id']}}">Update</a>
                            <a class="btn btn-primary" href="{{'delete/'.$data['id']}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>




        </div>

    </div>

</div>
</body>
</html>