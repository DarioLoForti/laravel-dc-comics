@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col 12">
                <h2 class="text-white text-center mt-4">Edit Comic</h2>
            </div>
            <div class="col-12">
                <div class="form-container d-flex">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form action="{{ route('comic.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                id="title" placeholder="Add title" value="{{ $comic->title }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                cols="30" rows="10" placeholder="Add description" required>{{ $comic->description }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="thump">Thumb</label>
                            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                                id="thumb" placeholder="Add URL image" value="{{ $comic->thumb }}">
                            @error('thumb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                                id="price" placeholder="Add price" value="{{ $comic->price }}" required>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="series">Series</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                                id="series" placeholder="Add series" value="{{ $comic->series }}" required>
                            @error('series')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sale_date">Sale Date</label>
                            <input type="text" class="form-control @error('sale_date') is-invalid @enderror"
                                name="sale_date" id="sale_date" placeholder="Add sale date" value="{{ $comic->sale_date }}"
                                required>
                            @error('sale_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                                id="type" placeholder="Add type" value="{{ $comic->type }}" required>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
