@extends('layouts.journal')
@section('content')
<head>
    <style>
        #test{
            min-height:50vh;
        }
    </style>

</head>
<body>
    <div class="container" id="test">
        <table class="table table-striped">
            <thead>
                <th>Volume</th>
                <th>No</th>
                <th>Article Title</th>
                <th>Published On</th>
                <th>Option</th>
            </thead>
            <tbody>
                @foreach($journals as $journal)
                    <tr>
                        <td> {{$journal->vol}} </td>
                        <td> {{$journal->no}} </td>
                        <td> {{$journal->title}} </td>
                        <td> {{$journal->created_at->diffForHumans()}} </td>
                        <td>
                            <a href="/journal/{{$journal->id}}">PDF</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>

    

@endsection