@extends('layouts.layout')

@section('content')
<style>
  .section-title {
    text-align: center;
    /* margin-bottom: 30px; */
    margin-top: 100px
}

.section-title h2 {
    color: #333;
    font-size: 36px;
    margin: 0;
}
.row{
  margin-left: 100px;
  margin-right: 100px;
  /* background-color: #0056b3 */
  display: flex:
  width: 400px:
}
.icon-box{
  width: 250px;
  height: 350px;
  margin-right: 80px;
}
</style>

<link rel="stylesheet" href="main.css">
<section id="services" class="services section-bg">
<div class="container" data-aos="fade-up">
<div class="section-title" > 
  <h2>Our Services</h2>
  <p>Our Needy Student Management System offers a comprehensive range of services to support students facing various challenges, <br>ensuring their academic success and well-being. Our services include:</p>
</div>
<div class="row">
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
    {{-- <div class="icon-box">
      <div class="icon"><i class='bx bx-money'></i></div>
      <h4><a href="">Tuition Fee</a></h4>
      <p> Providing resources and guidance for students experiencing financial hardships.</p>
    </div> --}}
  </div>
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
    <div class="icon-box">
      <div class="icon"><i class='bx bx-book-bookmark' ></i></div>
      <h4><a href="">Academic Support</a></h4>
      <p>Offering tutoring, study skills workshops, and academic counseling to help students excel in their studies</p>
    </div>
  </div>
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
    <div class="icon-box">
      <div class="icon"><i class='bx bx-money'></i></div>
      <h4><a href="">Upkeep</a></h4>
      <p>Providing finances to the student for their upkeep requirements. The amount is directly sent to the student's bank account</p>
    </div>
  </div>
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
    <div class="icon-box">
      <div class="icon"><i class='bx bxs-user-detail'></i></div>
      <h4><a href="">Student progress tracking</a></h4>
      <p>The progress of the student who applied will be monitored.</p>
    </div>
  </div>
</div>
{{-- <div class="team">
  <h4><a href="">Our Team</a></h4>
  <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
    <div class="icon-box">
      <div class="icon"><i class='bx bxs-user-detail'></i></div>

      <p>The progress of the student who applied will be monitored.</p>
    </div>
  </div>
</div>
</div> --}}
</section>
@endsection
