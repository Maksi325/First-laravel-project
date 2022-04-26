@extends('layouts.app')


@section('content')
    @foreach ($posts as $post)
        <article>

            <h1>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
            </h1>
            </a>

            <div>
                {!! $post->body !!}
            </div>

        </article>
    @endforeach
@endsection
