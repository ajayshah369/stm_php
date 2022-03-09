@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>View quick inquiry</h1>
          <div id="content-main">


  <ul class="object-tools">
    
      





    
  </ul>


<form method="post" id="quickinquiry_form">
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-name">
            
            
                <div>
                    
                    
                        <label>Name:</label>
                        
                            <div class="readonly">{{$inquiry->name}}</div>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_number">
            
            
                <div>
                    
                    
                        <label>Phone number:</label>
                        
                            <div class="readonly">{{$inquiry->phone_number}}</div>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email">
            
            
                <div>
                    
                    
                        <label>Email:</label>
                        
                            <div class="readonly">{{$inquiry->email}}</div>
                        
                    
                    
                </div>
            
        </div>
    
        
    
        <div class="form-row field-moving_from">
            
            
                <div>
                    
                    
                        <label>Moving from:</label>
                        
                            <div class="readonly">{{$inquiry->moving_from}}</div>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-moving_to">
            
            
                <div>
                    
                    
                        <label>Moving to:</label>
                        
                            <div class="readonly">{{$inquiry->moving_to}}</div>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-query">
            
            
                <div>
                    
                    
                        <label>Query:</label>
                        
                            <div class="readonly">{{$inquiry->query}}</div>
                        
                    
                    
                </div>
            
        </div>
    
    
</fieldset>













<div class="submit-row">



    
    <p class="deletelink-box"><a href="/admin/quickinquiries/{{$inquiry->id}}/delete/" class="deletelink">Delete</a></p>





</div>



    


</div>
</form></div>

          
          <br class="clear">
        </div>
@stop