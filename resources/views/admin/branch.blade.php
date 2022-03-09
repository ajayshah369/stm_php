@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change Branch</h1>
  <div id="content-main">


  


<form method="post" id="branch_form">
@csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label class="required" for="id_title">Title:</label>
                        
                            <input type="text" name="title" value="{{$branch->title}}" class="vTextField" maxlength="200" required id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-slug">
            
            
                <div>
                    
                    
                        <label class="required" for="id_slug">Slug:</label>
                        
                            <input type="text" name="slug" value="{{$branch->slug}}" class="vTextField" maxlength="200" required id="id_slug">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-address">
            
            
                <div>
                    
                    
                        <label class="required" for="id_address">Address:</label>
                        
                            <textarea name="address" cols="40" rows="10" class="vLargeTextField" required id="id_address">{{$branch->address}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_one">
            
            
                <div>
                    
                    
                        <label class="required" for="id_phone_one">Phone one:</label>
                        
                            <input type="text" name="phone_one" value="{{$branch->phone_one}}" class="vTextField" maxlength="200" required id="id_phone_one">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_two">
            
            
                <div>
                    
                    
                        <label for="id_phone_two">Phone two:</label>
                        
                            <input type="text" name="phone_two" value="{{$branch->phone_two}}" class="vTextField" maxlength="200" id="id_phone_two">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_three">
            
            
                <div>
                    
                    
                        <label for="id_phone_three">Phone three:</label>
                        
                            <input type="text" name="phone_three" value="{{$branch->phone_three}}" class="vTextField" maxlength="200" id="id_phone_three">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_four">
            
            
                <div>
                    
                    
                        <label for="id_phone_four">Phone four:</label>
                        
                            <input type="text" value="{{$branch->phone_four}}" name="phone_four" class="vTextField" maxlength="200" id="id_phone_four">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_five">
            
            
                <div>
                    
                    
                        <label for="id_phone_five">Phone five:</label>
                        
                            <input type="text" value="{{$branch->phone_five}}" name="phone_five" class="vTextField" maxlength="200" id="id_phone_five">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email_one">
            
            
                <div>
                    
                    
                        <label class="required" for="id_email_one">Email one:</label>
                        
                            <input type="email" name="email_one" value="{{$branch->email_one}}" class="vTextField" maxlength="200" required id="id_email_one">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email_two">
            
            
                <div>
                    
                    
                        <label for="id_email_two">Email two:</label>
                        
                            <input type="email" value="{{$branch->email_two}}" name="email_two" class="vTextField" maxlength="200" id="id_email_two">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-p">
            
            
                <div>
                    
                    
                        <label class="required" for="id_p">P:</label>
                        
                            <textarea name="p" cols="40" rows="10" class="vLargeTextField" required id="id_p">{{$branch->p}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-map">
            
            
                <div>
                    
                    
                        <label class="required" for="id_map">Map:</label>
                        
                            <textarea name="map" cols="40" rows="10" class="vLargeTextField" required id="id_map">{{$branch->map}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_title">
            
            
                <div>
                    
                    
                        <label for="id_seo_title">Seo title:</label>
                        
                            <textarea name="seo_title" cols="40" rows="10" class="vLargeTextField" id="id_seo_title">{{$branch->seo_title}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_description">
            
            
                <div>
                    
                    
                        <label for="id_seo_description">Seo description:</label>
                        
                            <textarea name="seo_description" cols="40" rows="10" class="vLargeTextField" id="id_seo_description">{{$branch->seo_description}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_keywords">
            
            
                <div>
                    
                    
                        <label for="id_seo_keywords">Seo keywords:</label>
                        
                            <textarea name="seo_keywords" cols="40" rows="10" class="vLargeTextField" id="id_seo_keywords">{{$branch->seo_keywords}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_property_title">
            
            
                <div>
                    
                    
                        <label for="id_seo_property_title">SEO Property Title:</label>
                        
                            <textarea name="seo_property_title" cols="40" rows="10" class="vLargeTextField" id="id_seo_property_title">{{$branch->seo_property_title}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_property_description">
            
            
                <div>
                    
                    
                        <label for="id_seo_property_description">SEO Property Description:</label>
                        
                            <textarea name="seo_property_description" cols="40" rows="10" class="vLargeTextField" id="id_seo_property_description">{{$branch->seo_property_description}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_property_keywords">
            
            
                <div>
                    
                    
                        <label for="id_seo_property_keywords">SEO Property Keywords:</label>
                        
                            <textarea name="seo_property_keywords" cols="40" rows="10" class="vLargeTextField" id="id_seo_property_keywords">{{$branch->seo_property_keywords}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_twitter_title">
            
            
                <div>
                    
                    
                        <label for="id_seo_twitter_title">SEO Twitter Title:</label>
                        
                            <textarea name="seo_twitter_title" cols="40" rows="10" class="vLargeTextField" id="id_seo_twitter_title">{{$branch->seo_twitter_title}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_twitter_description">
            
            
                <div>
                    
                    
                        <label for="id_seo_twitter_description">SEO Twitter Description:</label>
                        
                            <textarea name="seo_twitter_description" cols="40" rows="10" class="vLargeTextField" id="id_seo_twitter_description">{{$branch->seo_twitter_description}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-seo_twitter_keywords">
            
            
                <div>
                    
                    
                        <label for="id_seo_twitter_keywords">SEO Twitter Keywords:</label>
                        
                            <textarea name="seo_twitter_keywords" cols="40" rows="10" class="vLargeTextField" id="id_seo_twitter_keywords">{{$branch->seo_twitter_keywords}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">

    
    <p class="deletelink-box"><a href="/admin/branches/{{$branch->id}}/delete/" class="deletelink">Delete</a></p>


<input type="submit" value="Save and add another" name="_addanother">


</div>



    


</div>
</form></div>
</div>
@stop