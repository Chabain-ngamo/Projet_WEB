@extends('template.master')

@section('title', 'Sigup')

@section('heading', 'ADD PRODUCT')

@section('content')

<form method="POST" class='container'>

@csrf

  <div class='r1'>
    <input name="name" placeholder="Enter product's name..."></input>
  </div>
  <div class='r2'>
    <input name="description" placeholder="Enter product description..."></input>
  </div>
  <div class='r3'>
    <input name="price" placeholder="Enter product price..."></input>
  </div>
  <div>
      <button type="submit">Submit</button>
  </div>
</form>
