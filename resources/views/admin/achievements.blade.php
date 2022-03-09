@extends('admin.home')

@section('content')
<div id="content" class="colM">
  <h1>Change about us</h1>

  <div id="content-main">
    <form action="post" class="changelist-form">
      <div class="results">
        <table id="result_list">
          <thead>
            <tr>
              <th scope="col" class="sortable column-date sorted descending">
                <div class="text"><a>Date</a></div>
              </th>
              <th scope="col" class="sortable column-image">
                <div class="text"><a>Image</a></div>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($achievements as $achievement)
              <tr>
                <th class="field-date nowrap"><a href="/admin/achievements/{{$achievement->id}}/">{{$achievement->date}}</a></th>
                <td class="field-image">
                  <a href="{{asset('files/').'/'.$achievement->image}}">
                    {{$achievement->image}}
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <p class="paginator">
        {{count($achievements)}} Achievements
      </p>
    </form>
  </div>
</div>
@stop