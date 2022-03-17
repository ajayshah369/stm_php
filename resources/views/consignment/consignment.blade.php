@extends('consignment.base')

@section('css')
<link rel="stylesheet" href="{{asset('consignment/consignment.css')}}">
@stop

@section('content')
<div class="consignment">
  <h2>Consignment</h2>
  <div class="details">
    <table>
      <tr>
        <th>Consignment Number</th>
        <th> : </th>
        <td>{{$consignment->consignment_number}}</td>
      </tr>
      <tr>
        <th>Person Name</th>
        <th> : </th>
        <td>{{$consignment->person_name}}</td>
      </tr>
      <tr>
        <th>Person Email</th>
        <th> : </th>
        <td>{{$consignment->person_email}}</td>
      </tr>
      <tr>
        <th>Created At</th>
        <th> : </th>
        <td>{!! date('d/M/Y', strtotime($consignment->created_at)) !!}</td>
      </tr>
      <tr>
        <th>Truck Number</th>
        <th> : </th>
        <td>{{$consignment->truck_number}}</td>
      </tr>
      <tr>
        <th>Status</th>
        <th> : </th>
        <td>{{$consignment->status}}</td>
      </tr>
      <tr>
        <th>Estimate Delievery</th>
        <th> : </th>
        <td>{!! date('d/M/Y', strtotime($consignment->estimate_delievery)) !!}</td>
      </tr>
      @if ($consignment->completed_at)
        <tr>
          <th>Completed At</th>
          <th> : </th>
          <td>{!! date('d/M/Y', strtotime($consignment->completed_at)) !!}</td>
        </tr>
      @endif
    </table>
  </div>
  <div class="check-points">
    @foreach($consignment->check_points as $checkpoint)
      <div class="check-point">
        <div class="counter">
          {{$loop->index + 1}}
          @if(!$loop->last)
            <span class="stepper"></span>
          @endif
        </div>
        {{$checkpoint}}
      </div>
    @endforeach
  </div>
  <form method="post">
    @csrf
      <div class="input-group">
        <label for="check_points">Add Check Point</label>
        <textarea type="text" id="check_points" rows="5" name="check_points"></textarea>
      </div>
      <div class="input-group">
        <label for="status">Status</label>
        <select name="status" id="status">
          <option value="started" @if($consignment->status == 'started') selected @endif>Started</option>
          <option value="in_transition" @if($consignment->status == 'in_transition') selected @endif>In Transition</option>
          <option value="completed" @if($consignment->status == 'completed') selected @endif>Completed</option>
        </select>
      </div>
      <div class="buttons">
        <button type="submit">Modify</button>
        <a href="/consignments/{{$consignment->id}}/delete">Delete</a>
      </div>
  </form>
</div>
@stop