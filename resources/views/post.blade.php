@extends('layouts.master')
@section('title', '$post->title')
@section('banner')

@section('content')
<header class="masthead img-post" style="background-image: url({{ asset($post->image) }})">
    <section id="featured-news" class="write-wrapper">
        <div class="section-inner">
            <div class="container">
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
        <Justify>
        <p>{{ $post->description }}</p>
</Justify>
    </main>
</div>
</section>
@endsection
