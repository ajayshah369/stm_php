@extends('consignment.base')

@section('css')
<link rel="stylesheet" href="{{asset('consignment/home.css')}}">
@stop


@section('content')
<div class="consignments">
  <div class="filter">
    <form method="post" class="date" id="submit-date">
      <div class="choose-date">
        <label for="date-from">From</label>
        <input type="date" id="date-from" name="date-from">
      </div>
      <div class="choose-date">
        <label for="date-to">To</label>
        <input type="date" id="date-to" max name="date-to">
      </div>
      <div class="buttons">
        <a href="/consignments/home" class="clear">Clear</a>
        <button type="submit">Go</button>
      </div>
    </form>
  </div>
  <table>
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Created At</th>
        <th>Consignment Number</th>
        <th>Person Name</th>
        <th>Person Email</th>
        <th>Truck Number</th>
        <th>Estimate Delievery</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($consignments as $consignment)
      <tr>
        <td><a href="/consignments/{{$consignment->id}}">{{$loop->index + 1}}</a></td>
        <td>{!! date('d/M/Y', strtotime($consignment->created_at)) !!}</td>
        <td>{{$consignment->consignment_number}}</td>
        <td>{{$consignment->person_name}}</td>
        <td>{{$consignment->person_email}}</td>
        <td>{{$consignment->truck_number}}</td>
        <td>{!! date('d/M/Y', strtotime($consignment->estimate_delievery)) !!}</td>
        <td>{{$consignment->status}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="pages">
    @for($i = 1; $i <= $pages; $i++)
    <a href="/consignments/home?page={{$i}}" class="@if ($i == $page) active @endif">{{$i}}</a>
    @endfor
  </div>
  <script src="{{asset('consignment/home.js')}}"></script>
</div>
@stop