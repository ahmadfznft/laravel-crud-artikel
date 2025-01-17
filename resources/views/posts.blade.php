@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        @foreach ($posts as $post)
            <article class="mb-5">
                <a href="/posts/{{ $post['slug'] }}">
                    <h2>{{ $post['title'] }}</h2>
                </a>
                <h5>{{ $post['author'] }}</h5>
                <p>{{ $post['body'] }}</p>
            </article>
        @endforeach
    </div>
@endsection
