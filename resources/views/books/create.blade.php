@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
<div class="form-container">
  <h1 class="form-title">{{ $pageTitle }}</h1>
  <form class="form" method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="form-item">
      <label>Category:</label>
      <select class="form-input" type="text" name="category" value="{{old('category')}}">
        <option value="Engineering">Engineering</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Science and Technology">Science and Technology</option>
        <option value="History">History</option>
        <option value="IT programming">IT programming</option>
      </select>
      @error('category')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-item">
      <label>ISBN:</label>
      <textarea class="form-text-area" name="isbn">{{old('isbn')}}</textarea>
      @error('isbn')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-item">
      <label>Title:</label>
      <textarea class="form-text-area" name="title">{{old('title')}}</textarea>
      @error('title')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-item">
      <label>Author:</label>
      <textarea class="form-text-area" name="author">{{old('suthor')}}</textarea>
      @error('author')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-item">
      <label>Publisher:</label>
      <textarea class="form-text-area" name="publisher">{{old('publisher')}}</textarea>
      @error('pubslisher')
          <div class="alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <select class="form-input" name="status">
      <option @if(old('status') == 'not_started') selected @endif value="not_started">Not Started</option>
      <option @if(old('status') == 'available') selected @endif value="available">Available</option>
      <option @if(old('status') == 'borrowed') selected @endif value="borrowed">Borrowed</option>
  </option>
</select>
    <button type="submit" class="form-button">Submit</button>
  </form>
</div>

@endsection