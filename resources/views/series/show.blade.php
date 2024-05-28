@extends('layouts.app')
@section('title', $series->title)

@section('content')
    <section class="container bg-white mt-4">
        <h1 class="text-center">{{$series->title}}</h1>
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{$series->image}}" class="img-fluid" alt="{{$series->title}}">
            </div>
            <div class="col-12 col-md-8">
                <p>{{Str::limit($series->description, 80)}}</p>
                <div>
                    Type: {{$series->type}}
                </div>
                <div>
                    Price: {{$series->price}}
                </div>
                <div>
                    <!--<a href="{{route('series.destroy', $series->id)}}" class="btn btn-primary">Elimina</a>-->
                    <form action="{{route('series.destroy', $series->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Rimuovi" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection