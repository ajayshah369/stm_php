@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/blogs.css')}}" />
@stop

@section('content')
  <main>
    <div
      id="bg">
      <h1>Blogs</h1>
    </div>
    <div id="blogs" class="container">
      @foreach ($blogs as $blog)
        <div class="blog">
          <img src="{{ asset('files/').'/'.$blog->image }}" alt="{{ $blog->title }}" />
          <h3>{{$blog->title}}</h3>
          <p>{{ Str::limit($blog->p, 200, $end=' . . .') }}</p>
          <a href="/blogs/{{ $blog->slug }}">Read more</a>
        </div>
      @endforeach
    </div>
  </main>
@stop