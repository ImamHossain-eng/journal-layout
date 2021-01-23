@extends('layouts.journal')
@section('content')
<head>
</head>
<body>
    
    <form action="/journal" method="POST" enctype="multipart/form-data">

    {{csrf_field()}}
        <div class="form-group">
            <input type="number" class="form-control" name="vol" placeholder="Enter Volume No">
        </div><br>
        <div class="form-group">
            <input type="number" class="form-control" name="no" placeholder="Enter Article No">
        </div><br>
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Enter Article Title">
        </div><br>
        <div class="form-group">
            <input type="text" class="form-control" name="author" placeholder="Enter Article Author Name">
        </div><br>
        <div class="form-group">
            <input type="file" name="file" class="form-control">
        </div><br>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        <br>
        <input type="submit" value="Save" class="btn btn-primary">
    
    </form>
</body>



@endsection