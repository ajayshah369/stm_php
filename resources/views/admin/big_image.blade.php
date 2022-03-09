@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change Big Image</h1>

  <div id="content-main">
    <form enctype="multipart/form-data" method="post" id="bigimages_form">
      @csrf
      <div>
        <fieldset class="module aligned ">
          <div class="form-row field-image">
            <div>
              <label class="required" for="id_image">Image:</label>
              <p class="file-upload">Currently: <a href="{{asset('files/').'/'.$big_image->image}}">{{$big_image->image}}</a><br>
                Change:
                <input type="file" name="image" accept="image/*" id="id_image">
              </p> 
            </div>
          </div>
    
          <div class="form-row field-title">
            <div>
              <label for="id_title">Title:</label>
              <input required type="text" name="title" value="{{$big_image->title}}" class="vTextField" maxlength="200" id="id_title">
            </div>
          </div>
        </fieldset>

        <div class="submit-row">
          <input type="submit" value="Save" class="default" name="_save">
          <p class="deletelink-box"><a href="/admin/bigimages/{{$big_image->id}}/delete/" class="deletelink">Delete</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
@stop