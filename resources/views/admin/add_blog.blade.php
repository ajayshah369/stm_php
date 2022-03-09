@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>Add blog</h1>
          
          <div id="content-main">



<form enctype="multipart/form-data" method="post" id="blog_form">
        @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label class="required" for="id_title">Title:</label>
                        
                            <input type="text" name="title" class="vTextField" maxlength="100" required id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-slug">
            
            
                <div>
                    
                    
                        <label class="required" for="id_slug">Slug:</label>
                        
                            <input type="text" name="slug" class="vTextField" maxlength="100" required id="id_slug">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-image">
            
            
                <div>
                    
                    
                        <label for="id_image">Image:</label>
                        
                            <input required type="file" name="image" accept="image/*" id="id_image">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-p">
            
            
                <div>
                    
                    
                        <label class="required" for="id_p">Post:</label>
                        
                            <textarea name="p" cols="40" rows="10" class="vLargeTextField" required id="id_p"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_title">
            
            
                <div>
                    
                    
                        <label for="id_seo_title">Seo title:</label>
                        
                            <textarea name="seo_title" cols="40" rows="10" class="vLargeTextField" id="id_seo_title"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_description">
            
            
                <div>
                    
                    
                        <label for="id_seo_description">Seo description:</label>
                        
                            <textarea name="seo_description" cols="40" rows="10" class="vLargeTextField" id="id_seo_description"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_keywords">
            
            
                <div>
                    
                    
                        <label for="id_seo_keywords">Seo keywords:</label>
                        
                            <textarea name="seo_keywords" cols="40" rows="10" class="vLargeTextField" id="id_seo_keywords"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_property_title">
            
            
                <div>
                    
                    
                        <label for="id_seo_property_title">SEO Property Title:</label>
                        
                            <textarea name="seo_property_title" cols="40" rows="10" class="vLargeTextField" id="id_seo_property_title"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_property_description">
            
            
                <div>
                    
                    
                        <label for="id_seo_property_description">SEO Property Description:</label>
                        
                            <textarea name="seo_property_description" cols="40" rows="10" class="vLargeTextField" id="id_seo_property_description"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_property_keywords">
            
            
                <div>
                    
                    
                        <label for="id_seo_property_keywords">SEO Property Keywords:</label>
                        
                            <textarea name="seo_property_keywords" cols="40" rows="10" class="vLargeTextField" id="id_seo_property_keywords"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_twitter_title">
            
            
                <div>
                    
                    
                        <label for="id_seo_twitter_title">SEO Twitter Title:</label>
                        
                            <textarea name="seo_twitter_title" cols="40" rows="10" class="vLargeTextField" id="id_seo_twitter_title"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_twitter_description">
            
            
                <div>
                    
                    
                        <label for="id_seo_twitter_description">SEO Twitter Description:</label>
                        
                            <textarea name="seo_twitter_description" cols="40" rows="10" class="vLargeTextField" id="id_seo_twitter_description"></textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_twitter_keywords">
            
            
                <div>
                    
                    
                        <label for="id_seo_twitter_keywords">SEO Twitter Keywords:</label>
                        
                            <textarea name="seo_twitter_keywords" cols="40" rows="10" class="vLargeTextField" id="id_seo_twitter_keywords"></textarea>
                        
                    
                    
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