@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change about us</h1>

  <div id="content-main">
    <form enctype="multipart/form-data" method="post" id="achievement_form">
      @csrf
      <div>
        <fieldset class="module aligned ">
          <div class="form-row field-image">
            <div>
              <label class="required" for="id_image">Image:</label>
              <p class="file-upload">Currently:
                <a href="{{asset('files/').'/'.$achievement->image}}">{{$achievement->image}}</a>
                <br>
                Change:
                <input type="file" name="image" accept="image/*" id="id_image" />
              </p>
            </div>
          </div>
          <div class="form-row field-t">
            <div>
              <label class="required" for="id_t">Type:</label>
              <select name="t" required id="id_t">
                <option value="">---------</option>
                <option value="1" {{$achievement->t == 1 ? 'selected' : ''}}>Awards</option>
                <option value="2" {{$achievement->t == 2 ? 'selected' : ''}}>Pics</option>
              </select>
            </div>
          </div>
        </fieldset>
        <div class="submit-row">
          <input type="submit" value="Save" class="default" name="_save">
          <p class="deletelink-box"><a href="/admin/achievements/{{$achievement->id}}/delete/" class="deletelink">Delete</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
@stop