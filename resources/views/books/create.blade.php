@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
<div class="form-container">
  <h1 class="form-title">{{ $pageTitle }}</h1>
  <form class="form">
    <div class="form-item">
      <label>Category:</label>
      <select class="form-input">
        <option value="Engineering">Engineering</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Science and Technology">Science and Technology</option>
        <option value="History">History</option>
        <option value="IT programming">IT programming</option>
      </select>
    </div>

    <div class="form-item">
      <label>ISBN:</label>
      <textarea class="form-text-area"></textarea>
    </div>

    <div class="form-item">
      <label>Title:</label>
      <textarea class="form-text-area"></textarea>
    </div>

    <div class="form-item">
      <label>Author:</label>
      <textarea class="form-text-area"></textarea>
    </div>

    <div class="form-item">
      <label>Publisher:</label>
      <textarea class="form-text-area"></textarea>
    </div>

    <div class="form-item">
      <label>Status:</label>
      <select class="form-input">
        <option value="Available">Available</option>
        <option value="Borrowed">Borrowed</option>
      </select>
    </div>
    <button type="button" class="form-button">Submit</button>
  </form>
</div>

@endsection