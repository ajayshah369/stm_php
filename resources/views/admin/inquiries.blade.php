@extends('admin.home')

@section('content')
<div id="content">
  <h1>Select inquiry to view</h1>
  <div id="content-main">
    
    
    
    <div class="module" id="changelist">
      <div class="changelist-form-container">
        


        

        <form id="changelist-form" method="post">
        

          


<div class="results">
<table id="result_list">
<thead>
<tr>

<th scope="col" class="action-checkbox-column">
   
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-date">
   
     
   
   <div class="text"><a>Date</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-person_name">
   
     
   
   <div class="text"><a>Person Name</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-email">
   
     
   
   <div class="text"><a>Email</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-mobile_number">
   
     
   
   <div class="text"><a>Mobile Number</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-company_name">
   
     
   
   <div class="text"><a>Company Name</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>

@foreach($inquiries as $inquiry)
<tr><td class="action-checkbox"><input type="checkbox" name="_selected_action" value="8" class="action-select"></td><th class="field-date nowrap"><a href="/admin/inquiries/{{$inquiry->id}}">{{$inquiry->date}}</a></th><td class="field-person_name">{{$inquiry->person_name}}</td><td class="field-email">{{$inquiry->email}}</td><td class="field-mobile_number">{{$inquiry->mobile_number}}</td><td class="field-company_name">{{$inquiry->company_name}}</td></tr>
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