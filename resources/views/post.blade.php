@extends('layouts.master')
@section('title', '$post->title')
@section('banner')

@section('content')
<header class="masthead">
    <section id="featured-news" class="write-wrapper">
        <div class="section-inner">
            <img class="img-post" src="{{ asset($post->image) }}">
</header>
<div class="wrapper row3">
    <main class="hoc container clear">
        <center>
            <h1>{{ $post->title }} </h1>
            <span class="meta">
                Authors
                <a href="#">{{ $post->author->name }}</a>
                Update
                {{ $post->created_at->diffForHumans() }}
            </span>
            <h2 class="subheading">{{ $post->subtitle }}</h2>
        </center>
        <p class="desc-post">{{ $post->description }}</p>
    </main>
</div>
</section>
@endsection
