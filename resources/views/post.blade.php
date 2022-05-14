@extends('layouts.app')


@section('content')
    <article>
        <h1 class="col-md-8 offset-md-2 mb-4">
            {{ $post->title }}
        </h1>
        <p>
            By <a href="#">{{ $post->user->name }}</a> in
            <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a> Category
        </p>

        <div>
            {!! $post->body !!}
        </div>

        <a href="/">Go Back</a>
    </article>
@endsection
