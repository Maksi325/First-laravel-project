@extends('layouts.app')


@section('content')
    @foreach ($posts as $post)
        <article class=" mx-5">

            <h1 class="col-md-8 offset-md-2 mb-4">
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>



            <div>
                {!! $post->body !!}
            </div>

        </article>
    @endforeach
@endsection
