@extends('layout.app')

@section('content')
    <div class="jumbo">
    </div>
    <div class="container">
        <div class="row">
            <button class="btn-top">current series</button>
            <a href="{{ route('comic.create') }}"><button class="btn-end">Add Comic</button></a>
            <div class="col-12">
                <div class="comic-content">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <a href="{{ route('comic.show', ['comic' => $comic['id']]) }}">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                                <h5> {{ $comic['series'] }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="btn">
                    <button>Load More</button>
                </div>
            </div>
        </div>
    </div>
@endsection
