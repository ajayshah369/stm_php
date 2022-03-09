@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change Big Images</h1>

  <div id="content-main">
    <form action="post" class="changelist-form">
      <div class="results">
        <table id="result_list">
          <thead>
            <tr>
              <th scope="col" class="sortable column-date sorted descending">
                <div class="text"><a>Title</a></div>
              </th>
              <th scope="col" class="sortable column-image">
                <div class="text"><a>Image</a></div>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($big_images as $big_image)
              <tr>
                <th class="field-date nowrap"><a href="/admin/bigimages/{{$big_image->id}}/">{{$big_image->title}}</a></th>
                <td class="field-image">
                  <a href="{{asset('files/').'/'.$big_image->image}}">
                    {{$big_image->image}}
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <p class="paginator">
        {{count($big_images)}} Big Images
      </p>
    </form>
  </div>
</div>
@stop