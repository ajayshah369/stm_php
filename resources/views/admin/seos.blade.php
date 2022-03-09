@extends('admin.home')

@section('content')
<div id="content" class="">
          
          <h1>Select seo to change</h1>
          
          
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
<th scope="col" class="sortable column-page">
   
     
   
   <div class="text"><a>For Page</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>


@foreach ($seos as $seo)
<tr><td class="action-checkbox"><input type="checkbox" name="_selected_action" class="action-select"></td><th class="field-page"><a href="/admin/seo/{{$seo->id}}">{{$seo->page}}</a></th></tr>
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