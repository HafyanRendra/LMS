@extends('layouts.master')
@section('pageTitle', $pageTitle)

@section('main')
  <div class="student-list-container">
    <h1 class="student-list-heading">Student List</h1>

    <div class="student-list-student-buttons">
    <a href="{{ route('students.create') }}">
      <button  class="student-list-button">
        <span class="material-icons">add</span>New Student
      </button>
    </a>
  </div>

    <div class="student-list-table-head">
      <div class="student-list-header-name">Name</div>
      <div class="student-list-header-student_id">Student ID</div>
      <div class="student-list-header-course">Course</div>
    </div>

    @foreach ($students as $index => $student)
    <div class="table-body">
            <div class="table-body-name"> {{ $student->name }} </div>
            <div class="table-body-student_id"> {{ $student->student_id }} </div>
            <div class="table-body-course"> {{ $student->course }} </div>
    </div>
        <div>
          <a href="{{ route('students.edit', ['id' => $student->id])}}">Edit</a>
          <a href="{{ route('students.delete', ['id' => $student->id]) }}">Delete</a>
        </div>
    @endforeach
  </div>
</body>

@endsection