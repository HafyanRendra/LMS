@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
<div class="form-container">
  <h1 class="form-title">{{ $pageTitle }}</h1>
  <form class="form" method="POST" action="{{route('students.store')}}">
    @csrf
    <div class="form-item">
      <label>Name:</label>
      <textarea class="form-text-area" name="name">{{old('name')}}</textarea>
      @error('name')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-item">
      <label>Student ID:</label>
      <textarea class="form-text-area" name="student_id">{{old('student_id')}}</textarea>
      @error('student_id')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-item">
      <label>Course:</label>
      <textarea class="form-text-area" name="course">{{old('course')}}</textarea>
      @error('title')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="form-button">Submit</button>
  </form>
</div>

@endsection