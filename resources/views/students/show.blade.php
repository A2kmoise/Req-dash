@extends('students.layout')

@section('content')
<div class="container">
    <h2>Student Details</h2>
    <div>
        <strong>Name:</strong> {{ $student->studentname }}
    </div>
    <div>
        <strong>Course:</strong> {{ $student->course }}
    </div>
    <div>
        <strong>Fee:</strong> {{ $student->fee }}
    </div>
    <a href="{{ route('students.index') }}" class="btn btn-primary mt-3">Back to list</a>
</div>
@endsection
