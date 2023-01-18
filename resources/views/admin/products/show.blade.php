@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="d-flex gap-4">
        <img style="height: 300px;" src="#" alt="#">
        <div class="details">
            <h1>{{$product->title}}</h1>
            <p>{{$product->description}}</p>
        </div>
    </div>
</div>


@endsection