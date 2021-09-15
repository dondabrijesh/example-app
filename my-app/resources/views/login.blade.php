<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <style>
        .flexBox {
            display: block;
            margin-left: auto;
            margin-right:auto ;
            width: 350px;
            box-sizing: border-box;
            justify-content: center;
            align-items: center;
        }
    </style>
<body style="background-color: #4e555b">
<div class="container pt-5">
    <div class="flexBox pt-5">
        <div class="card" style="box-shadow: 2px 5px 20px black;">
            <div class="card-header text-center pl-5 pr-5">
                <h3 class="card-title">AdminLte</h3>
            </div>
            <div class="card-body pl-5 pr-5">
                <p class="text-black-50 text-center pt-4">Login To START Your Session</p>
                <form action="{{URL::route('user-check')}}" method="POST">
                    @csrf
                    {{session('username')}}
                    <input type="text" name="username" class="form-control" placeholder="Username">
                        <br>
                    <input type="password" name="password" class="form-control  " placeholder="Password"><br>
                    <div class="text-center">
                    <button class="btn btn-primary btn-block form-control">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>