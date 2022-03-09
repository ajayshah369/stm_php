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
            </tr>
          </thead>
          <tbody>
            @foreach ($blogs as $blog)
              <tr>
                <th class="field-date nowrap"><a href="/admin/blogs/{{$blog->id}}/">{{$blog->title}}</a></th>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <p class="paginator">
        {{count($blogs)}} Blogs
      </p>
    </form>
  </div>
</div>
@stop