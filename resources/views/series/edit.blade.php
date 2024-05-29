@extends('layouts.app')
@section('title', 'Modifica prodotto')

@section('content')
<section class="container">
    <form action="{{route('series.update', $series->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" value="{{old('title', $series->title)}}" name="title">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                {{old('description', $series->description)}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" value="{{old('image', $series->image)}}" name="image">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" value="{{old('price', $series->price)}}" name="price">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control @error('serie') is-invalid @enderror" id="serie" value="{{old('serie', $series->serie)}}" name="serie">
            @error('serie')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{old('sale_date', $series->sale_date)}}" name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type" value="{{old('type', $series->type)}}" name="type">
                <option value="comic book" {{$series->type === 'comic book' ? 'selected' : ''}} >book</option>
                <option value="graphic novel" {{$series->type === 'graphic novel' ? 'selected' : ''}}>novel</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</section>
@endsection