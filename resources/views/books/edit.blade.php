@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  <div class="form-container">
    <h1 class="form-title">{{ $pageTitle }}</h1>
    <form class="form" method="POST" action="{{route('books.update',['id'=>$books->id])}}]">
      @method('PUT')
      @csrf>
      <div class="form-item">
        <label>Category:</label>
        <textarea
          class="form-text-area" value="{{ old('category', $books->category) }}" name="category"></textarea>
        
      </div>

      <div class="form-item">
        <label>ISBN:</label>
        <textarea class="form-text-area" value="{{ old('isbn', $books->isbn) }}" name="isbn"></textarea>
      </div>

      <div class="form-item">
        <label>Title:</label>
        <textarea class="form-text-area" value="{{ old('title', $books->title) }}" name="title"></textarea>
      </div>

      <div class="form-item">
        <label>Author:</label>
        <textarea class="form-text-area" value="{{ old('author', $books->author) }}" name="author"></textarea>
      </div>

      <div class="form-item">
        <label>Publisher:</label>
        <textarea class="form-text-area" value="{{ old('publisher', $books->publisher) }}" name="publisher"></textarea>
      </div>

      <div class="form-item">
        <label>Status:</label>
        <select class="form-input">
        <option @if(old('status', $books->status) == 'not_started') selected @endif value="not_started">
            Not Started
          </option>
          <option @if(old('status', $books->status) == 'available') selected @endif value="available">
            Available
          </option>
          <option @if(old('status', $books->status) == 'borrowed') selected @endif value="borrowed">
            Borrowed
        </select>
      </div>
      <button type="submit" class="form-button">Submit</button>
    </form>
  </div>
@endsection