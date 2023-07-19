@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  <div class="form-container">
    <h1 class="form-title">{{ $pageTitle }}</h1>
    <form class="form" method="POST" action="{{route('students.update',['id'=>$students->id])}}]">
      @method('PUT')
      @csrf>
      <div class="form-item">
        <label>Name:</label>
        <textarea class="form-text-area" value="{{ old('name', $students->name) }}" name="name"></textarea>
      </div>

      <div class="form-item">
        <label>Student ID:</label>
        <textarea class="form-text-area" value="{{ old('student_id', $students->student_id) }}" name="student_id"></textarea>
      </div>

      <div class="form-item">
        <label>Course:</label>
        <textarea class="form-text-area" value="{{ old('course', $students->course) }}" name="course"></textarea>
      </div>

      <button type="submit" class="form-button">Submit</button>
    </form>
  </div>
@endsection