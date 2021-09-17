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
            <form action="{{URL::route('insert-data')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{isset($data['id'])?$data['id']:''}}">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{isset($data['name'])?$data['name']:''}}">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="{{isset($data['email'])?$data['email']:''}}">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" value="{{isset($data['password'])?$data['password']:''}}">
                <input type="radio" class="form-check-input"  name="gender" value="male" <?php if(isset($data['gender']) && $data['gender']=='male'){echo 'checked';}?>>Male
                <input type="radio" class="form-check-input" name="gender" value="female" <?php if(isset($data['gender']) && $data['gender']=='female'){echo 'checked';}?>>Female
               <br> Select:
                <select class="form-control" name="status">
                    <option>Select</option>
                    <option value="admin" <?php if (isset($data['status']) && $data['status']=='admin'){echo 'selected';}?>>Admin</option>
                    <option value="local" <?php if (isset($data['status']) && $data['status']=='local'){echo 'selected';}?>>Local</option>
                </select>
                <label>Category:</label><br>
                <?php
                if(isset($data['category']))
                    {
                        $category=explode(',',$data['category']);
                    }
                ?>
                <input type="checkbox" name="category[]" class="form-check-input" value="laravel" <?php if(isset($data['category']) &&in_array('laravel',$category)){echo 'checked';}?>><label class="form-check-label">Laravel</label>
                <input type="checkbox" name="category[]" class="form-check-input" value="jquery" <?php if(isset($data['category']) &&in_array('jquery',$category)){echo 'checked';}?>><label class="form-check-label">Jquery</label>
                <input type="checkbox" name="category[]" class="form-check-input" value="bootsrap" <?php if(isset($data['category']) &&in_array('bootsrap',$category)){echo 'checked';}?>><label class="form-check-label">Bootsrap</label>
                <input type="checkbox" name="category[]" class="form-check-input" value="codeignater" <?php if(isset($data['category']) &&in_array('codeignater',$category)){echo 'checked';}?>><label class="form-check-label">Codeigniter</label>
               <br>
                @if(isset($data['image_path']))
                    <img style="width: 10%" src="{{asset('images/'.$data->image_path)}}">
                    @else
                    <input type="file" name="imgUpload" class="form-control-file">
                    @endif
                <br> <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>