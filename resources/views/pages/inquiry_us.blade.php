@extends('layout.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/inquiry_us.css')}}" />
@stop

@section('content')
  <main>
    <div
		id="bg">
		<h1>Inquiry Us</h1>
	  </div>
    <form method="post">
      @csrf
      <div class="one">
        @foreach ($form_inputs as $input)
          @if ($loop->index < 10)
            @if ($loop->index == 4)
              <div class="input">
                <label>{{$input['label']}}</label>
                <input type="date" id="id_{{$input['name']}}" name="{{$input['name']}}" />
              </div>
            @else
              <div class="input">
                <label>{{$input["label"]}}</label>
                <input type="text" id="id_{{$input['name']}}" name="{{$input['name']}}" />
              </div>
            @endif
          @elseif ($loop->index == 10)
            <div class="input">
              <label>{{$input['label']}}</label>
              <select name="{{$input['name']}}" id="id_{{$input['name']}}">
                <option value="" selected="selected">Select</option>
                @foreach ($services as $service)
                  <option value="{{$service->title}}">
                    {{$service->title}}
                  </option>
                @endforeach
              </select>
            </div>
          @endif
        @endforeach
      </div>
      <h3>Item List <span>( fill the fields as per your requirement otherwise left empty )</span></h3>
      <div class="two">
        @foreach ($form_inputs as $input)
          @if ($loop->index > 10 and $loop->index < 108)
            <div class="input input_two">
              <input type="checkbox">
              <label>{{$input['label']}}</label>
              <input type="text" id="id_{{$input['name']}}" name="{{$input['name']}}" />
            </div>
          @endif
        @endforeach
      </div>
      <div class="other">
        @foreach ($form_inputs as $input)
          @if ($loop->index == 108)
            <div class="input">
              <label>{{$input['label']}}</label>
              <textarea type="text" id="id_{{$input['name']}}" name="{{$input['name']}}"></textarea>
            </div>
          @endif
        @endforeach
      </div>
      <div class="errors">
        @foreach ($errors as $error)
          <p class="error">{{$error}}</p>
        @endforeach
      </div>
      <button type="submit">Submit</button>
    </form>
  </main>
@stop