@extends('template.master')

@section('title', 'Sigup')

@section('heading', 'SIGN UP')

@section('content')

<form method="POST" class='container'>

@csrf

  <div class='r1'>
    <input name="firstName" placeholder="Enter firstName..."></input>
  </div>
  <div class='r2'>
    <input name="secondName" placeholder="Enter secondName..."></input>
  </div>
  <div class='r3'>
    <input name="centre" placeholder="Enter centre name..."></input>
  </div>
  <div class='r4'>
    <input name="email" type="email" placeholder="Enter Email..."></input>
  </div>
  <div class='r5'>
    <input name="password" type="password" placeholder="Enter Password..."></input>
  </div>
  <div>
      <button type="submit">Submit</button>
  </div>
</form>
