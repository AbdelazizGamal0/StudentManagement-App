@extends('Layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollment Page</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Enroll no : {{ $enrollments->enroll_no }}</h5>
                <p class="card-text">Batch : {{ $enrollments->batches_id }}</p>
                <p class="card-text">Student : {{ $enrollments->student_id }}</p>
                <p class="card-text">Join Data : {{ $enrollments->join_data }}</p>
                <p class="card-text">Fee : {{ $enrollments->fee }}</p>
            </div>

            </hr>

        </div>
    </div>
@endsection
