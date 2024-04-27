@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="main.css">
<div class="container">
        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
          @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('applicant.login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #fff">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('applicant.register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #fff">Register</a>
                @endif
            @endauth
        </div> --}}
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

          <button class="clearButton" style="color:#fff; background-color: rgb(57, 28, 160); padding:5px; font-size:20px; "><a href="login">Apply Now</a></button>
          <h2>If you are Donor please login using here:<button style="margin-right:20px;"><a role="button" href="/sponsor/login">Donor</a></button></h2>
        </div>
      </div>
</section>
<div style="background-color: rgb(57, 28, 160); width:100%; height:10px;">
  <div class="button-welcome" style="margin-left: 560px; color:#fff; display:flex;">
    {{-- <p style="margin-right: 20px">Login as:</p>
    <button  style="margin-right:20px;"><a role="button" href="/admin/login">Admin</a></button>
    <button style="margin-right:20px;"><a role="button" href="/staff/login">Staff</a></button>
    <button style="margin-right:20px;"><a role="button" href="/sponsor/login">Donor</a></button> --}}
  </div>
</div>
@endsection