@extends('layouts.master')
@section('pageTitle', $pageTitle)

@section('main')
  <div class="book-list-container">
    <h1 class="book-list-heading">Book List</h1>

    <div class="task-list-task-buttons">
    <a href="{{ route('books.create') }}">
      <button  class="book-list-button">
        <span class="material-icons">add</span>New Book
      </button>
    </a>
  </div>

    <div class="book-list-table-head">
      <div class="book-list-header-category">Category</div>
      <div class="book-list-header-isbn">ISBN</div>
      <div class="book-list-header-title">Title</div>
      <div class="book-list-header-author">Author</div>
      <div class="book-list-header-publisher">Publisher</div>
      <div class="book-list-header-status">Status</div>
    </div>

    @foreach ($books as $index => $book)
      <div class="table-body">
        <div class="table-body-category"> {{ $book->category }} </div>
        <div class="table-body-isbn"> {{ $book->isbn }} </div>
        <div class="table-body-title"> {{ $book->title }} </div>
        <div class="table-body-author"> {{ $book->author }} </div>
        <div class="table-body-publisher"> {{ $book->publisher }} </div>
        <div class="table-body-status"><span class="material-icons @if ($book->status == 'Available') check-icon-completed @else check-icon @endif">check_circle</span>
          {{ $book->status}}</div>
        
        </div>
        <div>
          <a href="{{ route('books.edit', ['id' => $book->id])}}">Edit</a>
          <a href="{{ route('books.delete', ['id' => $book->id]) }}">Delete</a>
        </div>
    @endforeach
  </div>
</body>

@endsection