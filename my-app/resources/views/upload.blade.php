<form action="{{URL::route('upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br>
    <input type="submit">
</form>