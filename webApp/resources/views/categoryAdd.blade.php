@extends('template.master')

@section('title', 'CATEGORY')

@section('heading', 'ADD CATEGORY')

@section('content')

<form method="POST" class='container'>

@csrf

  <div class='r1'>
    <input name="name" placeholder="Enter category's name..."></input>
  </div>
  <div class='r2'>
    <input name="product_id" placeholder="Enter product id..."></input>
  </div>
  <div>
      <button type="submit">Submit</button>
  </div>
</form>
