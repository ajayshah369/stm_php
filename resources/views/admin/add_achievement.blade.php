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
              <input type="file" name="image" accept="image/*" required id="id_image">
            </div>
          </div>
          <div class="form-row field-t">
            <div>
              <label class="required" for="id_t">Type:</label>
              <select name="t" required id="id_t">
                <option value="" selected="">---------</option>
                <option value="1">Awards</option>
                <option value="2">Pics</option>
              </select>
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