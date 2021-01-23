@extends('layouts.journal')
@section('content')
<head>
</head>
<body>
    <a href="/journal/create" class="btn btn-primary">Add New</a>
    <br>
    <div class="main">
        <table class="table table-striped">
            <thead>
                <th>Volume</th>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Option</th>
            </thead>
            <tbody>
                @foreach($journals as $journal)
                <tr>
                    <td> {{$journal->vol}} </td>
                    <td> {{$journal->no}} </td>
                    <td> {{$journal->title}} </td>
                    <td> {{$journal->author}} </td>
                    <td> {{$journal->created_at->diffForHumans()}} 
                        
                    
                    </td>
                    <td>
                        <a href="/journal/{{$journal->id}}" class="btn btn-success">Show</a>
                        <a href="/journal/{{$journal->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/journal/{{$journal->id}}" method="POST" enctype="multipart/form-data"  style="display:inline-block">			
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger" type="submit">
                             <i class="fa fa-trash">Delete</i>
                            </button>
                          </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>



@endsection