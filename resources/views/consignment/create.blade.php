@extends('consignment.base')

@section('css')
<link rel="stylesheet" href="{{asset('consignment/create.css')}}">
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@stop

@section('content')
<div class="create">
    <h2>Create Consignment</h2>
    <form id="form" method="post">
      @csrf
      <p id="error"></p>
      <div class="input-group">
        <label for="consignment_number">Consignment Number</label>
        <input type="text" required id="consignment_number" name="consignment_number" />
      </div>
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
      <button id="submit" type="submit">Create</button>
    </form>
    <script src="{{asset('consignment/create.js')}}"></script>
</div>
@stop