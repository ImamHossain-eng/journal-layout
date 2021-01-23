@extends('layouts.journal')
@section('content')
<head>
</head>
<body>
    
    <form action="/journal/{{$journal->id}}" method="POST" enctype="multipart/form-data">

    {{csrf_field()}}
    {{method_field('PUT')}}
        <div class="form-group">
            <input type="number" class="form-control" name="vol" value="{{$journal->vol}}" placeholder="Enter Volume No">
        </div><br>
        <div class="form-group">
            <input type="number" class="form-control" name="no" value="{{$journal->no}}" placeholder="Enter Article No">
        </div><br>
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{$journal->title}}" placeholder="Enter Article Title">
        </div><br>
        <div class="form-group">
            <input type="text" class="form-control" name="author" value="{{$journal->author}}" placeholder="Enter Article Author Name">
        </div><br>
        <div class="form-group">
            <input type="file" name="file" class="form-control">
        </div><br>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"> {{$journal->body}} </textarea>
        <br>
        <input type="submit" value="Save" class="btn btn-primary">
    
    </form>
</body>



@endsection