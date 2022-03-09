@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change about us</h1>

  <div id="content-main">
    <form enctype="multipart/form-data" method="post" id="aboutus_form">
      @csrf
      <input type="number" name="id" value="{{$about_us->id}}" hidden />
      <div>
        <fieldset class="module aligned ">
          <div class="form-row field-welcome1">
            <div>
              <label class="required" for="id_welcome1">Welcome1:</label>
              <textarea name="welcome1" cols="40" rows="10" class="vLargeTextField" required id="id_welcome1">{{$about_us->welcome1}}</textarea>  
            </div>
          </div>
    
          <div class="form-row field-welcome2">
            <div>
              <label class="required" for="id_welcome2">Welcome2:</label>
              <textarea name="welcome2" cols="40" rows="10" class="vLargeTextField" required id="id_welcome2">{{$about_us->welcome2}}</textarea>
            </div>
          </div>
    
          <div class="form-row field-small_image">
            <div>
              <label class="required" for="id_small_image">Small image:</label>
              <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$about_us->small_image}}">{{$about_us->small_image}}</a>
                <br>
                Change:
                <input type="file" name="small_image" accept="image/*" id="id_small_image">
              </p>
            </div>
          </div>
    
          <div class="form-row field-p1">
            <div>
              <label class="required" for="id_p1">P1:</label>
              <textarea name="p1" cols="40" rows="10" class="vLargeTextField" required id="id_p1">{{$about_us->p1}}</textarea>
            </div>
          </div>
    
          <div class="form-row field-p2">
            <div>
              <label class="required" for="id_p2">P2:</label>
                <textarea name="p2" cols="40" rows="10" class="vLargeTextField" required id="id_p2">
{{$about_us->p2}}
                </textarea>
            </div>
          </div>
    
          <div class="form-row field-our_vision">
            <div>
              <label class="required" for="id_our_vision">Our vision:</label>
              <textarea name="our_vision" cols="40" rows="10" class="vLargeTextField" required id="id_our_vision">
{{$about_us->our_vision}}
              </textarea>
            </div>
          </div>
    
          <div class="form-row field-vision_image">
            <div>
              <label class="required" for="id_vision_image">Vision image:</label>
              <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$about_us->vision_image}}">{{$about_us->vision_image}}</a><br>
                Change:
                <input type="file" name="vision_image" accept="image/*" id="id_vision_image">
              </p>
            </div>
          </div>
    
          <div class="form-row field-our_mission">
            <div>
              <label class="required" for="id_our_mission">Our mission:</label>
              <textarea name="our_mission" cols="40" rows="10" class="vLargeTextField" required id="id_our_mission">
{{$about_us->our_mission}}
              </textarea>
            </div>
          </div>
    
          <div class="form-row field-mission_image">
            <div>
              <label class="required" for="id_mission_image">Mission image:</label>
              <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$about_us->mission_image}}">{{$about_us->mission_image}}</a><br>
                Change:
                <input type="file" name="mission_image" accept="image/*" id="id_mission_image">
              </p>
            </div>
          </div>

          <div class="form-row field-our_team">
            <div>
              <label class="required" for="id_our_team">Our Team:</label>
              <textarea name="our_team" cols="40" rows="10" class="vLargeTextField" required id="id_our_team">
{{$about_us->our_team}}
              </textarea>
            </div> 
          </div>
    
          <div class="form-row field-our_team_image">
            <div>
              <label class="required" for="id_our_team_image">Our team image:</label>
              <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$about_us->our_team_image}}">{{$about_us->our_team_image}}</a><br>
                Change:
                <input type="file" name="our_team_image" accept="image/*" id="id_our_team_image">
              </p>
            </div>
          </div>
    
          <div class="form-row field-footer">
            <div>
              <label class="required" for="id_footer">Footer:</label>
              <textarea name="footer" cols="40" rows="10" class="vLargeTextField" required id="id_footer">
{{$about_us->footer}}
              </textarea>
            </div>
          </div>
    
          <div class="form-row field-satisfied_clients">
            <div>
              <label class="required" for="id_satisfied_clients">Satisfied clients:</label>
              <input type="number" name="satisfied_clients" value="{{$about_us->satisfied_clients}}" class="vIntegerField" required id="id_satisfied_clients">
            </div>
          </div>
    
          <div class="form-row field-years_of_service">
            <div>
              <label class="required" for="id_years_of_service">Years of service:</label>
              <input type="number" name="years_of_service" value="{{$about_us->years_of_service}}" class="vIntegerField" required id="id_years_of_service">
            </div>
          </div>
    
          <div class="form-row field-number_of_employees">
            <div>
              <label class="required" for="id_number_of_employees">Number of employees:</label>
              <input type="number" name="number_of_employees" value="{{$about_us->number_of_employees}}" class="vIntegerField" required id="id_number_of_employees">
            </div>
          </div>
    
          <div class="form-row field-youtube_video">
            <div>
              <label for="id_youtube_video">Youtube video:</label>
              <textarea name="youtube_video" cols="40" rows="10" class="vLargeTextField" id="id_youtube_video">{{$about_us->youtube_video}}</textarea>
            </div>
          </div>
        </fieldset>
        <div class="submit-row">
          <input type="submit" value="Save" class="default" name="_save">
        </div>
      </div>
    </form>
  </div>
</div>
@stop