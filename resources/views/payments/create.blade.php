@extends ('Layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Payment Page</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('payments') }}" method="post">
          {!! csrf_field() !!}
            <label>Enrol no</label></br>
            <select name="enrollment_id" id="enrollment_id" class="form-control">
                @foreach($enrollments as $id => $enrollno)
                <option value="{{ $id }}">{{ $enrollno }}</option>
                @endforeach
            </select>
            <label>Paid Data</label></br>
            <input type="text" name="paid_data" id="paid_data" class="form-control"></br>
            <label>Amount</label></br>
            <input type="text" name="amount" id="amount" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop


