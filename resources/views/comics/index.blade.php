@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Thumb</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($comics as $comic)
            <tr>
                <td scope="row"><img src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>View - Edit - Delete</td>
            </tr>  
        @endforeach
        

    </tbody>
</table>
    
@endsection