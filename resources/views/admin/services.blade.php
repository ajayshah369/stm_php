@extends('admin.home')

@section('content')
<div id="content" class="">
          
          <h1>Select service to change</h1>
          
          
  <div id="content-main">
    
        
    
    <div class="module filtered" id="changelist">
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
<th scope="col" class="sortable column-title">
   
     
   
   <div class="text"><a>Title</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-highlight">
   
     
   
   <div class="text"><a>Highlight</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>


@foreach ($services as $service)
<tr><td class="action-checkbox"><input type="checkbox" name="_selected_action" class="action-select"></td><th class="field-title"><a href="/admin/services/{{$service->id}}">{{$service->title}}</a></th><td class="field-highlight"><img src="{{$service->highlight == 0 ? asset('admin/img/icon-no.svg') : asset('admin/img/icon-yes.svg')}}" alt="Highlight" /></td></tr>
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