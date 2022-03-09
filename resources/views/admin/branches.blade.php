@extends('admin.home')

@section('content')
<div class="content">
  <h1>Select branch to change</h1>
  <div id="content-main">
    <div class="module">
      <div class="changelist-form-container">
        <form id="changelist-form" action="post">
          @csrf
          <div class="results">
            <table id="result_list">
              <thead>
<tr>

<th scope="col" class="action-checkbox-column">
</th>
<th scope="col" class="sortable column-title sorted ascending">
     
   
   <div class="text"><a href="?o=-1">Title</a></div>
</th>
</tr>
</thead>
<tbody>
@foreach($branches as $branch)
<tr><td class="action-checkbox"><input type="checkbox" name="_selected_action" value="42" class="action-select"></td><th class="field-title"><a href="/admin/branches/{{$branch->id}}">{{$branch->title}}</a></th></tr>
@endforeach
</tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@stop