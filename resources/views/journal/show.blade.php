@extends('layouts.journal')
@section('content')
<head>
    <style>
        #file{
            width:100%;
            height:80vh;
        }
    </style>

</head>
<body>
    <embed src="{{asset('uploads/'.$journal->file)}}" id="file">
</body>

@endsection