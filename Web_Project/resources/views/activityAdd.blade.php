@extends('template.master')

@section('title', 'Sigup')

@section('heading', 'ADD ACTIVITY')

@section('content')

<form method="POST" class='container'>

@csrf

  <div class='r1'>
    <input name="description" placeholder="Enter activity description..."></input>
  </div>
  <div class='r2'>
    <input name="image" placeholder="Enter image..."></input>
  </div>
  <div class='r3'>
    <input name="dates" placeholder="Enter activity date (yyyy-mm-dd)..."></input>
  </div>
  <div class='r4'>
    <input name="status" placeholder="Enter status..."></input>
  </div>
  <div>
      <button type="submit">Submit</button>
  </div>
</form>
