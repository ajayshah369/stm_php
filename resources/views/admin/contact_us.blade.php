@extends('admin.home')

@section('content')
<div id="content" class="colM">
          
          <h1>Change contact us</h1>
          
          <div id="content-main">



<form enctype="multipart/form-data" method="post" id="contactus_form">
  @csrf
<div>



<input type="text" name="id" value="{{$contact_us->id}}" hidden />



  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-address">
            
            
                <div>
                    
                    
                        <label class="required" for="id_address">Address:</label>
                        
                            <textarea name="address" cols="40" rows="10" class="vLargeTextField" required id="id_address">{{$contact_us->address}}</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-address_image">
            
            
                <div>
                    
                    
                        <label class="required" for="id_address_image">Address image:</label>
                        
                            <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$contact_us->address_image}}">{{$contact_us->address_image}}</a><br>
Change:
<input type="file" name="address_image" accept="image/*" id="id_address_image"></p>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_one">
            
            
                <div>
                    
                    
                        <label class="required" for="id_phone_one">Phone one:</label>
                        
                            <input type="text" name="phone_one" value="{{$contact_us->phone_one}}" class="vTextField" maxlength="200" required id="id_phone_one">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_two">
            
            
                <div>
                    
                    
                        <label for="id_phone_two">Phone two:</label>
                        
                            <input type="text" name="phone_two" value="{{$contact_us->phone_two}}" class="vTextField" maxlength="200" id="id_phone_two">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_three">
            
            
                <div>
                    
                    
                        <label for="id_phone_three">Phone three:</label>
                        
                            <input type="text" name="phone_three" value="{{$contact_us->phone_three}}" class="vTextField" maxlength="200" id="id_phone_three">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_four">
            
            
                <div>
                    
                    
                        <label for="id_phone_four">Phone four:</label>
                        
                            <input type="text" name="phone_four" value="{{$contact_us->phone_four}}" class="vTextField" maxlength="200" id="id_phone_four">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone_five">
            
            
                <div>
                    
                    
                        <label for="id_phone_five">Phone five:</label>
                        
                            <input type="text" name="phone_five" value="{{$contact_us->phone_five}}" class="vTextField" maxlength="200" id="id_phone_five">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-call_image">
            
            
                <div>
                    
                    
                        <label class="required" for="id_call_image">Call image:</label>
                        
                            <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$contact_us->call_image}}">{{$contact_us->call_image}}</a><br>
Change:
<input type="file" name="call_image" accept="image/*" id="id_call_image"></p>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email_one">
            
            
                <div>
                    
                    
                        <label class="required" for="id_email_one">Email one:</label>
                        
                            <input type="email" name="email_one" value="{{$contact_us->email_one}}" class="vTextField" maxlength="200" required id="id_email_one">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email_two">
            
            
                <div>
                    
                    
                        <label for="id_email_two">Email two:</label>
                        
                            <input type="email" name="email_two" value="{{$contact_us->email_two}}" class="vTextField" maxlength="200" id="id_email_two">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email_image">
            
            
                <div>
                    
                    
                        <label class="required" for="id_email_image">Email image:</label>
                        
                            <p class="file-upload">Currently: <a href="{{asset('files/'.'/'.$contact_us->email_image)}}">{{$contact_us->email_image}}</a><br>
Change:
<input type="file" name="email_image" accept="image/*" id="id_email_image"></p>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-call">
            
            
                <div>
                    
                    
                        <label class="required" for="id_call">Call:</label>
                        
                            <input type="text" name="call" value="{{$contact_us->call}}" class="vTextField" maxlength="200" required id="id_call">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email">
            
            
                <div>
                    
                    
                        <label class="required" for="id_email">Email:</label>
                        
                            <input type="email" name="email" value="{{$contact_us->email}}" class="vTextField" maxlength="200" required id="id_email">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-whatsapp">
            
            
                <div>
                    
                    
                        <label for="id_whatsapp">Whatsapp:</label>
                        
                            <input type="text" name="whatsapp" value="{{$contact_us->whatsapp}}" class="vTextField" maxlength="200" id="id_whatsapp">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-facebook">
            
            
                <div>
                    
                    
                        <label for="id_facebook">Facebook:</label>
                        
                            <input type="text" name="facebook" value="{{$contact_us->facebook}}" class="vTextField" maxlength="200" id="id_facebook">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-linkedin">
            
            
                <div>
                    
                    
                        <label for="id_linkedin">Linkedin:</label>
                        
                            <input type="text" name="linkedin" value="{{$contact_us->linkedin}}" class="vTextField" maxlength="200" id="id_linkedin">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-twitter">
            
            
                <div>
                    
                    
                        <label for="id_twitter">Twitter:</label>
                        
                            <input type="text" name="twitter" value="{{$contact_us->twitter}}" class="vTextField" maxlength="200" id="id_twitter">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-instagram">
            
            
                <div>
                    
                    
                        <label for="id_instagram">Instagram:</label>
                        
                            <input type="text" name="instagram" class="vTextField" value="{{$contact_us->instagram}}" maxlength="200" id="id_instagram">
                        
                    
                    
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