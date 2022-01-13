@extends('layout.app')

@section('title','Edit'.$comic->title)

@section('content')
<h1 class="py-4 text-center text-primary">COMICS EDIT</h1>
<div class="text-center pb-3 px-3">
    <a href="{{route('comics.index')}}"><i style="font-size: 2.5rem" class="fas fa-arrow-circle-left"></i></a>
</div>
<div class="container pt-3">

    @include('layout.partials.error')

    <div class="d-flex flex-column">
        <h3 class="text-center">Edit a comic</h3>
        <form action="{{route('comics.update',$comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label>Thumbnail</label>
                <img width="100" src="{{$comic->thumb}}" alt="{{$comic->title}}" class="d-block pb-3">
                <input type="url" name="thumb" id="thumb" class="form-control" placeholder="Edit URL..." value="{{$comic->thumb}}">
                <small class="text-muted">Change the URL</small>
            </div>

            <div class="form-group mb-3">
                <label>Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Edit title..." value="{{$comic->title}}">
                <small class="text-muted">Change the title</small>
            </div>

            <div class="form-group mb-3">
                <label>Series</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Edit series..." value="{{$comic->series}}">
                <small class="form-text text-muted">Change the authors</small>
            </div>

            <div class="form-group mb-3">
                <label>Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" value="{{$comic->description}}">{{$comic->description}}</textarea>
                <small class="form-text text-muted">Change description</small>
            </div>

            <div class="form-group mb-3">
                <label>Sale-Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Add Sale-date..." value="{{$comic->sale_date}}" required>
                <small class="form-text text-muted">Change the sale-date</small>
            </div>

            <div class="form-group mb-3">
                <label>Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Add Type..." value="{{$comic->type}}" required>
                <small class="form-text text-muted">Change the type</small>
            </div>

            <div class="form-group mb-3">
                <label>Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Edit Price..." value="{{$comic->price}}">
                <small class="form-text text-muted">Change price</small>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>

    </div>

</div>
@endsection