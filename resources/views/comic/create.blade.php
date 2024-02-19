@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col 12">
                <h2 class="text-white text-center mt-4">Add Comic</h2>
            </div>
            <div class="col-12">
                <div class="form-container d-flex">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('comic.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Add title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10"
                                placeholder="Add description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="thump">Thumb</label>
                            <input type="text" class="form-control" name="thumb" id="thumb"
                                placeholder="Add URL image">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Add price"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" name="series" id="series"
                                placeholder="Add series" required>
                        </div>
                        <div class="form-group">
                            <label for="sale_date">Sale Date</label>
                            <input type="text" class="form-control" name="sale_date" id="sale_date"
                                placeholder="Add sale date" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" name="type" id="type" placeholder="Add type"
                                required>
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
