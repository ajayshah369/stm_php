@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change Blog</h1>

  <div class="content-main">
    <form enctype="multipart/form-data" method="post" id="blog_form">
      @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label class="required" for="id_title">Title:</label>
                        
                            <input type="text" name="title" value="Blog 3" class="vTextField" required maxlength="100" id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-slug">
            
            
                <div>
                    
                    
                        <label class="required" for="id_slug">Slug:</label>
                        
                            <input required type="text" name="slug" value="blog-3" class="vTextField" maxlength="100" id="id_slug">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-image">
            
            
                <div>
                    
                    
                        <label for="id_image">Image:</label>
                        
                            <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$blog->image}}">{{$blog->image}}</a>
<span class="clearable-file-input">
<input type="checkbox" name="image-clear" id="image-clear_id">
<label for="image-clear_id">Clear</label></span><br>
Change:
<input type="file" name="image" accept="image/*" id="id_image"></p>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-p">
            
            
                <div>
                    
                    
                        <label class="required" for="id_p">Post:</label>
                        
                            <textarea name="p" cols="40" rows="10" class="vLargeTextField" required id="id_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Facilisi cras fermentum odio eu feugiat pretium nibh ipsum. Quis vel eros donec ac odio. Et tortor consequat id porta nibh venenatis cras sed felis. Dictumst vestibulum rhoncus est pellentesque elit. Fermentum leo vel orci porta non pulvinar neque laoreet suspendisse. Senectus et netus et malesuada fames ac turpis. Tellus molestie nunc non blandit massa enim. Quam vulputate dignissim suspendisse in est ante in nibh mauris. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Amet consectetur adipiscing elit ut. Et sollicitudin ac orci phasellus egestas tellus rutrum. At urna condimentum mattis pellentesque id nibh tortor id aliquet. Placerat vestibulum lectus mauris ultrices eros in cursus.</textarea>
                        
                    
                    
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

    
    <p class="deletelink-box"><a href="/admin/blogs/{{$blog->id}}/delete/" class="deletelink">Delete</a></p>



</div>



    


</div>
</form>
  </div>
</div>
@stop