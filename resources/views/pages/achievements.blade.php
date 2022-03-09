@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/achievements.css')}}" />
@stop

@section('content')
  <main>
    <div
      id="bg">
      <h1>Achievements</h1>
    </div>
    <div id="achievements">
      <h3>1st Shivam Trans Movers Achievements</h3>
      <div class="achievements container">
        @foreach ($achievements as $achievement)
          @if ($achievement->t == "2")
            <div class="achievement">
              <img src="{{ asset('files/').'/'.$achievement->image }}" alt="Achievement">
            </div>
          @endif
        @endforeach
      </div>
      <div class="achievements container">
        @foreach ($achievements as $achievement)
          @if ($achievement->t == "1")
            <div class="achievement">
              <img src="{{ asset('files/').'/'.$achievement->image }}" alt="Achievement">
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </main>
@stop