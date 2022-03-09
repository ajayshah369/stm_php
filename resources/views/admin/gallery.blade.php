@extends('admin.home')

@section('content')
<div id="content" class="">
          
          <h1>Select gallery to change</h1>
          
          
  <div id="content-main">
    
    
    <div class="module" id="changelist">
      <div class="changelist-form-container">
        


        

        <form id="changelist-form" method="post">
        

        
      

          


<div class="results">
<table id="result_list">
<thead>
<tr>

<th scope="col" class="sortable column-date sorted descending">
     
   
   <div class="text"><a>Date</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-media">
   
     
   
   <div class="text"><a>Media</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-t">
   
     
   
   <div class="text">Type</a></div>
   <div class="clear"></div>
</th>
<th scope="col" class="sortable column-title">
   
     
   
   <div class="text"><a>Title</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>


@foreach ($galleries as $gallery)
<tr><th class="field-date nowrap"><a href="/admin/gallery/{{$gallery->id}}">{{$gallery->date}}</a></th><td class="field-media"><a href="{{asset('files/').'/'.$gallery->media}}">{{$gallery->media}}</a></td><td class="field-t">{{$gallery->t}}</td><td class="field-title"></td></tr>
@endforeach


</tbody>
</table>
</div>

        </form>
      </div>
      
        
      
    </div>
  </div>

          
          <br class="clear">
        </div>
@stop