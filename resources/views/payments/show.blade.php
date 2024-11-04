@extends('Layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Payments Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
            <h5 class="card-title">Enroll no : {{ $payments->enrollment->enroll_no }}</h5>
            <p class="card-text">Paid Data : {{ $payments->paid_data }}</p>
            <p class="card-text">Amount  : {{ $payments->amount }}</p>
        </div>
       
      </hr>
  
  </div>
</div>
@endsection