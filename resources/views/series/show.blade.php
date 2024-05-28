@extends('layouts.app')
@section('title', $serie->title)

@endsection
@section('content')
    <section class="container bg-white mt-4">
        <h1 class="text-center">{{$serie->title}}</h1>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{$serie->image}}" class="img-fluid" alt="{{$serie->title}}">
            </div>
            <div class="col-12 col-md-8">
                <p>{{Str::limit($serie->description, 80)}}</p>
                <div>
                    Type: {{$serie->type}}
                </div>
                <div>
                    Price: {{$serie->price}}
                </div>
            </div>
        </div>
    </section>
@endsection