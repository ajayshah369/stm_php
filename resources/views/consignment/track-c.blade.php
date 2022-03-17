@extends('consignment.track')

@section('css')
  <link rel="stylesheet" href="{{asset('consignment/track-c.css')}}">
@stop

@section('content')
  @if($not_found)
    <div class="not-found">
        <h3>Consignment Not Found</h3>
        <p>Please check your consignment number and try again.</p>
    </div>
  @else
    <div class="consignment">
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
      <div id="map"></div>
    </div>
  @endif
@stop