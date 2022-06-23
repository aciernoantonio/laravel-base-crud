@extends('layouts.app')

@section('content')

<div class="container">

    <img src="{{$comic->thumb}}" alt="">

    <div>
        {{$comic->title}}
    </div>

    <div>

        {{$comic->description}}

    </div>
</div>

    
@endsection