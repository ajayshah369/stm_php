@extends('admin.home')

@section('css')
  <link rel="stylesheet" href="{{asset('css/inquiry_us.css')}}" />
@stop

@section('content')
  <main>
    <form method="post">
      @csrf
      <div class="one">
        @foreach ($form_inputs as $input)
          @if ($loop->index < 10)
            @if ($loop->index == 4)
              <div class="input">
                <label>{{$input['label']}}</label>
                <input type="date" id="id_{{$input['name']}}" value="{{$input['value']}}" name="{{$input['name']}}" />
              </div>
            @else
              <div class="input">
                <label>{{$input["label"]}}</label>
                <input type="text" id="id_{{$input['name']}}" value="{{$input['value']}}" name="{{$input['name']}}" />
              </div>
            @endif
          @elseif ($loop->index == 10)
            <div class="input">
              <label>{{$input['label']}}</label>
              <select name="{{$input['name']}}" id="id_{{$input['name']}}">
                <option value="" selected="selected">Select</option>
                @foreach ($services as $service)
                  <option {{$input['value'] == $service->title ? 'selected' : ''}} value="{{$service->title}}">
                    {{$service->title}}
                  </option>
                @endforeach
              </select>
            </div>
          @endif
        @endforeach
      </div>
      <h1></h1>
      <div class="two">
        @foreach ($form_inputs as $input)
          @if ($loop->index > 10 and $loop->index < 108)
            <div class="input input_two">
              <input type="checkbox" {{$input['value'] != '' ? 'checked' : ''}}>
              <label>{{$input['label']}}</label>
              <input type="text" id="id_{{$input['name']}}" value="{{$input['value']}}" name="{{$input['name']}}" />
            </div>
          @endif
        @endforeach
      </div>
      <div class="other">
        @foreach ($form_inputs as $input)
          @if ($loop->index == 108)
            <div class="input">
              <label>{{$input['label']}}</label>
              <textarea type="text" id="id_{{$input['name']}}" value="{{$input['value']}}" name="{{$input['name']}}"></textarea>
            </div>
          @endif
        @endforeach
      </div>
      <div class="submit-row">
          <p class="deletelink-box"><a href="/admin/inquiries/{{$id}}/delete/" class="deletelink">Delete</a></p>
        </div>
    </form>
  </main>
@stop