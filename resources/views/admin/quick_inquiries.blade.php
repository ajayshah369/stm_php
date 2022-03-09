@extends('admin.home')

@section('content')
<div id="content" class="">
          
          <h1>Select quick inquiry to view</h1>
          
          
  <div id="content-main">
    
    
    
    <div class="module filtered" id="changelist">
      <div class="changelist-form-container">
        


        

        <form id="changelist-form" method="post">
        


          


<div class="results">
<table id="result_list">
<thead>
<tr>


<th scope="col" class="sortable column-date">
   
     
   
   <div class="text"><a>Date</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-name">
   
     
   
   <div class="text"><a>Name</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-email">
   
     
   
   <div class="text"><a>Email</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-phone_number">
   
     
   
   <div class="text"><a>Phone number</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>

  @foreach($inquiries as $inquiry)
    <tr><th class="field-date nowrap"><a href="/admin/quickinquiries/{{$inquiry->id}}">{{$inquiry->date}}</a></th><td class="field-name">{{$inquiry->name}}</td><td class="field-email">{{$inquiry->email}}</td><td class="field-phone_number">{{$inquiry->phone_number}}</td><td class="field-packing_date nowrap">-</td></tr>
  @endforeach

</tbody>
</table>
</div>


          
        
        



        </form>
      </div>
      
        
          
        
      
    </div>
  </div>

          
          <br class="clear">
        </div>
@stop