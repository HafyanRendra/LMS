@extends('layouts.master')
@section('pageTitle','Home')

@section('main')
<<div class="container">
    <div class="main">
      <div class="task-summary-container">
       <h1 class="task-summary-heading">Dashboard</h1>

      <div  class="task-summary-list">
        <span class="material-icons">check_circle</span>
        <h2>Total books available</h2>
      </div>

      <div class="task-summary-list">
        <span class="material-icons">list</span>
        <h2>Total students</h2>
      </div>

      <div class="task-summary-list">
        <span class="material-icons">list</span>
        <h2>Returned today</h2>
      </div>

      <div class="task-summary-list">
        <span class="material-icons">list</span>
        <h2>Borrowed today</h2>
      </div>

    </div>
  </div>


@endsection