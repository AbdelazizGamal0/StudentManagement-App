@extends('Layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
            <h5 class="card-title">Batch Name : {{ $batches->name }}</h5>
            <p class="card-text">Course name : {{ $batches->course->name }}</p>
            <p class="card-text">Start_Data : {{ $batches->start_data }}</p>
        </div>
       
      </hr>
  
  </div>
</div>
@endsection