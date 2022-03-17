@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/branches.css')}}" />
@stop

@section('content')
<main>
	<div
		id="bg">
		<h1>Our Branches</h1>
	</div>
	<div id="branches" class="container">
		@foreach ($branches as $branch)
      <div class="branch">
        <h4>{{$branch->title}}</h4>
        <p>{{ Str::limit($branch->p, 200, $end=' . . .') }} ...</p>
        <div style="width: 100%"
          ><a href="/{{$branch->slug}}">View Branch</a></div
        >
      </div>
		@endforeach
	</div>
</main>
@stop