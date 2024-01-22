@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between flex-wrap">
                    @foreach ($movies as $movie)
                        <div class="card m-3" style="width:calc(100% / 5 - 2rem);">
                            <img src="https://w7.pngwing.com/pngs/749/268/png-transparent-generic-icon-icons-matt-movie-symbol-video-thumbnail.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted ">{{ $movie->original_title }}</h6>
                                <p class="card-text">Vote: {{ $movie->vote }}</p>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
