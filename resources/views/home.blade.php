@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Movies</h1>
        <div>
            <ul>
                @foreach ($movies as $movie)
                <li>
                    {{ $movie->title }}
                </li>
                    
                @endforeach
            </ul>
        </div>
    </section>
@endsection