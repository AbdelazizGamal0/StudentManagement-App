@extends('Layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edits Page</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        <label>Enrol no</label></br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($payments as $id => $enrollno)
                <option value="{{ $id }}">{{ $enrollno }}</option>
                @endforeach
            </select>


      
        <label>Paid Data</label></br>
        <input type="text" name="paid_data" id="paid_data" value="{{$payments->paid_data}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop