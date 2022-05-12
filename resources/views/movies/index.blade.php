@extends('layouts.main')

@section('main-content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
    @foreach ($movies as $movies)
        <div class="col">
        <div class="card h-100">
        <div class="card-body">
            <h5 class="card-title">{{$movies->title}}</h5>
            <p class="card-text"><span>Original Title: </span>{{$movies->original_title}}</p>
            <p class="card-text"><span>Vote: </span> {{$movies->vote}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><span>Date: </span> {{$movies->date}}</small>
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection


