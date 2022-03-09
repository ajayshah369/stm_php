@extends('admin.home')

@section('content')
<div id="content">
  <h1>Select call back request to view</h1>
  <div id="content-main">
    
        
    
    
    <div class="module" id="changelist">
      <div class="changelist-form-container">
        


        

        <form id="changelist-form" method="post" novalidate="">
        
        @csrf
        
          


          


<div class="results">
<table id="result_list">
<thead>
<tr>


<th scope="col" class="sortable column-phone_number">
   
     
   
   <div class="text">Phone number</div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-date">
   
     
   
   <div class="text">Date</div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>


@foreach ($call_back_requests as $call_back_request)
<tr class=""><th class="field-phone_number"><a href="/admin/callbackrequests/{{$call_back_request->id}}">{{$call_back_request->phone_number}}</a></th></tr>
@endforeach

</tbody>
</table>
</div>

        </form>
      </div>
      
        
      
    </div>
  </div>
</div>
@stop