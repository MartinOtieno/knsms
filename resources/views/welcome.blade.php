@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="main.css">
<div class="container">
    </div>
</div>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="container-row">
          <p class="mssg" style="color: green; font-size:20px;"> {{ session('mssg')}} </p>
          <h1 style="color: #fff;">Kibu Needy Student Management System</h1>
          <h2>Support for the Needy Students.</h2>
          <h2>We provide the financial support for all students who can not afford to pay for their fees.</h2>

          <button class="clearButton" style="color:#fff; background-color: rgb(57, 28, 160); padding:5px; font-size:20px; margin-top:30px;"><a href="login">Apply Now</a></button>
          <h2 style="font-size:18px;">If you are Donor please login here:<button style="margin-left:20px; font-size:18px; margin-top:50px; text-docaration:underline; color:rgb(57, 28, 160)"><a role="button" href="/sponsor/login">Donor</a></button></h2>
        </div>
      </div>
</section>
<div style="background-color: rgb(57, 28, 160); width:100%; height:10px;">
  
</div>
@endsection