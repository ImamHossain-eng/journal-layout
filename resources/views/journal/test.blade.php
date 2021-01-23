@extends('layouts.journal')
@section('content')
    <div class="container">
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

@endsection