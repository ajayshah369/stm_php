@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>Change gallery</h1>

          <div id="content-main">


  


<form enctype="multipart/form-data" method="post" id="gallery_form">
  @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label for="id_title">Title:</label>
                        
                            <input type="text" name="title" value="{{$gall->title}}" class="vTextField" maxlength="200" id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-media">
            
            
                <div>
                    
                    
                        <label class="required" for="id_media">Media:</label>
                        
                            <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$gall->media}}">{{$gall->media}}</a><br>
Change:
<input type="file" name="media" id="id_media"></p>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-t">
            
            

            
        </div>
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">

    
    <p class="deletelink-box"><a href="/admin/gallery/{{$gall->id}}/delete/" class="deletelink">Delete</a></p>



</div>



   


</div>
</form></div>

          
          <br class="clear">
        </div>
@stop