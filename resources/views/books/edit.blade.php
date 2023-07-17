@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  <div class="form-container">
    <h1 class="form-title">{{ $pageTitle }}</h1>
    <form class="form">
      <div class="form-item">
        <label>Category:</label>
        <input
          class="form-input"
          type="text"
          value="{{ $book->category }}"
        >
      </div>

      <div class="form-item">
        <label>ISBN:</label>
        <textarea class="form-text-area">{{ $book->isbn }}</textarea>
      </div>

      <div class="form-item">
        <label>Title:</label>
        <textarea class="form-text-area">{{ $book->title }}</textarea>
      </div>

      <div class="form-item">
        <label>Author:</label>
        <textarea class="form-text-area">{{ $book->author }}</textarea>
      </div>

      <div class="form-item">
        <label>Publisher:</label>
        <textarea class="form-text-area">{{ $book->publisher }}</textarea>
      </div>

      <div class="form-item">
        <label>Status:</label>
        <select class="form-input">
          <option @if($book->status == 'Available') selected @endif value="Available">
            Available
          </option>
          <option @if($book->status == 'Borrowed') selected @endif value="Borrowed">
            Borrowed 
          </option>
        </select>
      </div>
      <button type="button" class="form-button">Submit</button>
    </form>
  </div>
@endsection