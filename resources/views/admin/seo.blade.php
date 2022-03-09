@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>Change seo</h1>
          <div id="content-main">


<form method="post" id="seo_form">
  @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-page">
            
            
                <div>
                    
                    
                        <label class="required" for="id_page">For Page:</label>
                        
                            <input type="text" name="page" value="{{$seo->page}}" class="vTextField" maxlength="200" required readonly id="id_page">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label for="id_title">Title:</label>
                        
                            <textarea required name="title" cols="40" rows="10" class="vLargeTextField" id="id_title">{{$seo->title}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-description">
            
            
                <div>
                    
                    
                        <label for="id_description">Description:</label>
                        
                            <textarea name="description" cols="40" rows="10" class="vLargeTextField" id="id_description">{{$seo->description}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-keywords">
            
            
                <div>
                    
                    
                        <label for="id_keywords">Keywords:</label>
                        
                            <textarea name="keywords" cols="40" rows="10" class="vLargeTextField" id="id_keywords">{{$seo->keywords}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-property_title">
            
            
                <div>
                    
                    
                        <label for="id_property_title">Property Title:</label>
                        
                            <textarea name="property_title" cols="40" rows="10" class="vLargeTextField" id="id_property_title">{{$seo->property_title}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-property_description">
            
            
                <div>
                    
                    
                        <label for="id_property_description">Property Description:</label>
                        
                            <textarea name="property_description" cols="40" rows="10" class="vLargeTextField" id="id_property_description">{{$seo->property_description}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-property_keywords">
            
            
                <div>
                    
                    
                        <label for="id_property_keywords">Property Keywords:</label>
                        
                            <textarea name="property_keywords" cols="40" rows="10" class="vLargeTextField" id="id_property_keywords">{{$seo->property_keywords}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-twitter_title">
            
            
                <div>
                    
                    
                        <label for="id_twitter_title">Twitter Title:</label>
                        
                            <textarea name="twitter_title" cols="40" rows="10" class="vLargeTextField" id="id_twitter_title">{{$seo->twitter_title}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-twitter_description">
            
            
                <div>
                    
                    
                        <label for="id_twitter_description">Twitter Description:</label>
                        
                            <textarea name="twitter_description" cols="40" rows="10" class="vLargeTextField" id="id_twitter_description">{{$seo->twitter_description}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-twitter_keywords">
            
            
                <div>
                    
                    
                        <label for="id_twitter_keywords">Twitter Keywords:</label>
                        
                            <textarea name="twitter_keywords" cols="40" rows="10" class="vLargeTextField" id="id_twitter_keywords">{{$seo->twitter_keywords}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">

    




</div>



    

</div>
</form></div>

          
          <br class="clear">
        </div>
@stop