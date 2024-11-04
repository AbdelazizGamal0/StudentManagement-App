@extends ('Layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Enrollment Page</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('enrollments') }}" method="post">
                {!! csrf_field() !!}

                <label>Enroll no</label></br>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>


                <label>Batch</label></br>
                <select name="batches_id" id="batches->name" class="form-control">
                    @foreach ($batches as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>

                <label>Student</label></br>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach ($students as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>


                <label>Join Data</label></br>
                <input type="text" name="join_data" id="join_data" class="form-control"></br>

                <label>Fee</label></br>
                <input type="text" name="fee" id="fee" class="form-control"></br>

                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@stop
