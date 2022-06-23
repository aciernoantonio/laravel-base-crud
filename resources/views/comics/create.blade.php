@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="text-center">Create your Comic</h1>

    <form action="{{route('comics.store')}}" method="post">

        @csrf

        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Your Comic" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Your Comic Here</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Your Thumb" aria-describedby="thumbHelper">
            <small id="thumbHelper" class="text-muted">Your Thumb Here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Description" rows="5">Description</textarea>
            <small id="descriptionbHelper" class="text-muted">Your Description Here</small>
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>

    </form>

</div>


    
@endsection