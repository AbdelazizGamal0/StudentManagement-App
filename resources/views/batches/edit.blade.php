@extends('Layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edits Page</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
        <label>Course name</label></br>
        <input type="text" name="course_id" id="syllabus" value="{{$batches->course->name}}" class="form-control"></br>
        <label>Start_Data</label></br>
        <input type="text" name="start_data" id="duration" value="{{$batches->start_data}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop