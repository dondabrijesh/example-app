<h1>User Login</h1>
@if($errors->any())
    @foreach($errors->all() as $err)
        <li>{{$err}}
        </li>
        @endforeach
    @endif
<form action="users" method="post">
    @csrf
   UserId: <input type="text" value="" name="username" placeholder="Enter userid">
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br>
    <br>
    Password:<input type="password" value="" name="password" placeholder="Enter PassWord">
    <span style="color: red">@error('password'){{'*'.$message}}@enderror</span>
    <br>

    <br>
    <button type="submit">Login</button>
</form>