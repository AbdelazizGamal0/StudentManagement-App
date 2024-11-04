@extends ('Layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Batch Page</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('batches') }}" method="post">
          {!! csrf_field() !!}
            <label>Batch Name</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Course</label></br>
            <!--input type="text" name="course_id" id="course_id" class="form-control"></br>-->
            <select name="course_id" id="course->name" class="form-control">
                @foreach($courses as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>


            <label>Start_Data</label></br>
            <input type="text" name="start_data" id="start_data" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop


