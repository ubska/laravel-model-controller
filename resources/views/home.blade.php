{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
<div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                    <p class="card-text">
                        Nationality: {{ $movie->nationality }}<br>
                        Date: {{ $movie->date }}<br>
                        Vote: {{ $movie->vote }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection


@section('titlePage')
home
@endsection