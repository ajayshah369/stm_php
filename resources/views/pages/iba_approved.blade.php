@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/iba_approved.css')}}" />
@stop

@section('content')
  <main>
    <div
      id="bg">
      <h1>IBA Approved</h1>
    </div>
    <div id="iba" class="container">
      <img src="{{asset('files/iba_approved.png')}}" alt="IBA Approved" />
      <h1>We are Approved By IBA <span>( Indian Bank's Association )</span></h1>
    </div>
  </main>
@stop