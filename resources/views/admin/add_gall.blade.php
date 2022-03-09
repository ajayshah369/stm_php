@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>Add gallery</h1>

          <div id="content-main">


  


<form enctype="multipart/form-data" method="post" id="gallery_form">
  @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label for="id_title">Title:</label>
                        
                            <input type="text" name="title" class="vTextField" maxlength="200" id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-media">
            
            
                <div>
                    
                    
                        <label class="required" for="id_media">Media:</label>
                        
<input type="file" name="media" required id="id_media">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-t">
            
            

            
        </div>
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">

    
    <p class="deletelink-box"><a href="/admin/main/gallery/40/delete/" class="deletelink">Delete</a></p>


<input type="submit" value="Save and add another" name="_addanother">
<input type="submit" value="Save and continue editing" name="_continue">


</div>



    <script id="django-admin-form-add-constants" src="/static/admin/js/change_form.js" async="">
    </script>




<script id="django-admin-prepopulated-fields-constants" src="/static/admin/js/prepopulate_init.js" data-prepopulated-fields="[]">
</script>


</div>
</form></div>

          
          <br class="clear">
        </div>
@stop