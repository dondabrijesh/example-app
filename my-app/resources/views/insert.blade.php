<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
<div class="container pt-5">
    <div class="card">
        <div class="card-header text-center">
            @if(!isset($data))
                <h3 class="card-title">
                    Insert data
                </h3>
            @else
                <h3 class="card-title">Update Data</h3>
            @endif
            {{--<a class="btn btn-dark float-right" href="{{URL::route('insert')}}">Insert Data</a>--}}
        </div>
        <div class="card-body">
            <form action="{{URL::route('insert-data')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{isset($data['id'])?$data['id']:''}}">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{isset($data['name'])?$data['name']:''}}">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="{{isset($data['email'])?$data['email']:''}}">
                <label>Password:</label>

                <input type="password" class="form-control" name="password" value="{{isset($data['password'])?$data['password']:''}}">
                <input type="radio" class="form-check-input"  name="gender" value="male">Male
                <input type="radio" class="form-check-input" name="gender" value="female">Female
               <br> Select:
                <select class="form-control" name="status">
                    <option>Select</option>
                    <option value="admin" {{isset($data['status'])?$data['status']=='admin'?'checked':'':''}}>Admin</option>
                    <option value="local">Local</option>
                </select>
                <label>Category:</label><br>
                <input type="checkbox" name="category[]" class="form-check-input" value="laravel"><label class="form-check-label">Laravel</label>
                <input type="checkbox" name="category[]" class="form-check-input" value="jquery"><label class="form-check-label">Jquery</label>
                <input type="checkbox" name="category[]" class="form-check-input" value="Bootsrap"><label class="form-check-label">Bootsrap</label>
                <input type="checkbox" name="category[]" class="form-check-input" value="Codeignatrer"><label class="form-check-label">Codeigniter</label>

                <br> <button class="btn btn-success">Submit</button>
            </form>



        </div>

    </div>

</div>
</body>
</html>