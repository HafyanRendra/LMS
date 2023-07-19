@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  <div class="form-container">
    <h1 class="form-title">{{ $pageTitle }}</h1>
    <form
      class="form"
      method="POST"
      action="{{ route('books.destroy', ['id' => $books->id]) }}"
    >
      @method('DELETE')
      @csrf
      <p>You are going to delete <strong>"{{ $books->name }}"</strong></p>
        <p>Are you sure?</p>
        <button
          type="submit"
          class="form-button"
        >
          Yes, delete it forever
        </button>
    </form>
  </div>
@endsection