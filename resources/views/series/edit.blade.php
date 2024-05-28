@extends('layouts.app')
@section('title', 'Modifica prodotto')

@section('content')
<section class="container">
    <form action="{{route('series.update', $series->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" value="{{$series->title}}" name="title" required>
            <div id="titleHelp" class="form-text">booh</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                {{$series->description}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" value="{{$series->image}}" name="image">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" value="{{$series->price}}" name="price">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" class="form-control" id="serie" value="{{$series->serie}}" name="serie" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date</label>
            <input type="text" class="form-control" id="sale_date" value="{{$series->sale_date}}" name="sale_date" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type" value="{{$series->type}}" name="type" required>
                <option value="comic book" {{$series->type === 'comic book' ? 'selected' : ''}} >book</option>
                <option value="graphic novel" {{$series->type === 'graphic novel' ? 'selected' : ''}}>novel</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</section>
@endsection