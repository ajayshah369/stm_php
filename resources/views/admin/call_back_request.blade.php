@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>View call back request</h1>
          <div id="content-main">


<form method="post" id="callbackrequest_form" novalidate="">
  @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-phone_number">
            
            
                <div>
                    
                    
                        <label>Phone number:</label>
                        
                            <div class="readonly">{{$call_back_request->phone_number}}</div>
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>













<div class="submit-row">



    
    <p class="deletelink-box"><a href="/admin/callbackrequests/{{$call_back_request->id}}/delete/" class="deletelink">Delete</a></p>





</div>



</div>
</form></div>

          
          <br class="clear">
        </div>
@stop