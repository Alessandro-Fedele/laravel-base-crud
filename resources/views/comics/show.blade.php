@extends('layout.app')

@section('title','Comic: '.$comic->title)

@section('content')

@include('comics.partials.single_comic')

@endsection