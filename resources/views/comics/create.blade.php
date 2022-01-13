@extends('layout.app')

@section('title','Comics Create')

@section('content')
<h1 class="py-4 text-center text-primary">COMICS CREATE</h1>
<div class="text-center pb-3 px-3">
    <a href="{{route('comics.index')}}"><i style="font-size: 2.5rem" class="fas fa-arrow-circle-left"></i></a>
</div>
<div class="container pt-3">

    @include('layout.partials.error')

    <div class="d-flex flex-column">
        <h3 class="text-center">Add your comic</h2>
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Thumbnail</label>
                    <input type="url" name="thumb" id="thumb" class="form-control" placeholder="Add URL..." value="{{old('thumb')}}">
                    <small class="text-muted">Add the URL image of the comic</small>
                </div>

                <div class="form-group mb-3">
                    <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Add title..." value="{{old('title')}}" required>
                    <small class="text-muted">Add the title of the comic</small>
                </div>

                <div class="form-group mb-3">
                    <label>Series</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Add Series..." value="{{old('series')}}" required>
                    <small class="form-text text-muted">Add the series of the comic</small>
                </div>

                <div class="form-group mb-3">
                    <label>Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" value="{{old('description')}}" required></textarea>
                    <small class="form-text text-muted">Add description</small>
                </div>

                <div class="form-group mb-3">
                    <label>Sale-Date</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Add Sale-date..." value="{{old('sale_date')}}" required>
                    <small class="form-text text-muted">Add the sale-date of the comic</small>
                </div>

                <div class="form-group mb-3">
                    <label>Type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Add Type..." value="{{old('type')}}" required>
                    <small class="form-text text-muted">Add the type of the comic</small>
                </div>

                <div class="form-group mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Add Price..." value="{{old('price')}}" required>
                    <small class="form-text text-muted">Insert price</small>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>

    </div>

</div>
@endsection