@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/blog.css')}}" />
@stop

@section('content')
  <main>
    <div
      id="bg">
      <h1>{{ $blog->title }}</h1>
    </div>
    <div id="blog" class="container">
      <div class="blog">
        <img src="{{ asset('files/'.'/'.$blog->image) }}" alt="{{ $blog->title }}" />
        <h3>{{$blog->title}}</h3>
        <p>{{$blog->p}}</p>
      </div>
    </div>
    <div id="branches">
      <h3>Our Branches</h3>
      <ul class="branches container">
        @foreach ($branches as $branch)
          <li><a href="/branches/{{$branch->slug}}" class="branch"> {{$branch->title}} </a></li>
        @endforeach
      </ul>
    </div>
  </main>
@stop