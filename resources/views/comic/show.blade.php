@extends('layout.app')

@section('content')
    <div class="bg-light">
        <div class="jumbo">
        </div>
        <div class="blue-bar">

        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12"></div>
                <div class="col-6">
                    <h3 class="py-3">{{ $comic['title'] }}</h3>
                    <div class="green d-flex">
                        <p><strong>U.S. Price:</strong> {{ $comic['price'] }} </p>
                        <p>{{ $comic['type'] }}</p>
                    </div>
                    <p class="py-3">{{ $comic['description'] }}</p>
                </div>
                <div class="col-6">
                    <a href="{{ route('comic.edit', ['comic' => $comic->id]) }}"><button
                            class="btn btn-warning btn-cnt">Edit
                            Comic</button></a>
                    <form action="{{ route('comic.destroy', ['comic' => $comic->id]) }}" method="POST"
                        onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-end">Delete Comic</button>
                    </form>
                    <img class="mb-5 img-details" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
            </div>
        </div>
        <div class="bg-grey py-3">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3>Talent</h3>

                    </div>
                    <div class="col-6">
                        <h3>Specs</h3>
                        <div class="col-12 d-flex py-2">
                            <div class="left">
                                <p>Series:</p>
                            </div>
                            <div class="right">
                                <p>{{ $comic['series'] }}</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex py-2">
                            <div class="left">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="right">
                                <p>{{ $comic['price'] }}</p>
                            </div>
                        </div>
                        <div class="col-12 d-flex py-2">
                            <div class="left">
                                <p>On sale Date:</p>
                            </div>
                            <div class="right">
                                <p>{{ $comic['sale_date'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
