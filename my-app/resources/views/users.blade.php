<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
<body>
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Registration</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary " href="">Home</a>
            <form action="{{URL::route('users-save')}}" method="post">
                @csrf

                <label>Name:</label>
                 <input type="text" class="form-control" name="username" placeholder="Enter userid">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
               <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter PassWord">
                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>
