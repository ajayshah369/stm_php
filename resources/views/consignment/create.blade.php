@extends('consignment.base')

@section('css')
<link rel="stylesheet" href="{{asset('consignment/create.css')}}">
@stop

@section('content')
<div class="create">
    <h2>Create Consignment</h2>
    <form method="post">
      @csrf
      <div class="input-group">
        <label for="person_name">Person Name</label>
        <input type="text" required id="person_name" name="person_name" />
      </div>
      <div class="input-group">
        <label for="person_email">Person Email</label>
        <input type="email" required id="person_email" name="person_email" />
      </div>
      <div class="input-group">
        <label for="truck_number">Truck Number</label>
        <input type="text" required id="truck_number" name="truck_number" />
      </div>
      <div class="input-group">
        <label for="estimate_delievery">Estimate Delievery</label>
        <input type="date" required id="estimate_delievery" name="estimate_delievery" />
      </div>
      <div class="input-group">
        <label for="check_points">Check Point</label>
        <textarea type="text" id="check_points" rows="5" name="check_points"></textarea>
      </div>
      <button type="submit">Create</button>
    </form>
</div>
@stop