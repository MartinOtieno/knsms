@extends('layouts.layout')

@section('content')
<style>
.section-title {
text-align: center;
margin-top: 95px
}
#contact{
background-color: #3c96b9;
}
.contact .info {
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background:#8c8b91;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
}

.contact .info i {
  font-size: 20px;
  color: #47b2e4;
  float: left;
  width: 25px;
  height: 24px;
  background: #e7f5fb;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 30px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 0.5px;
  color: #37517e;
}

.contact .info p {
  padding: 0 0 5px 15px;
  margin-bottom: 2px;
  font-size: 14px;
  color: #000;
}

.contact .info .email p {
  padding-top: 5px;
}

.contact .info .social-links {
  padding-left: 60px;
}

.contact .info .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #333;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  /* margin-right: 10px; */
}
.contact .info .social-links a:hover {
  background: #47b2e4;
  color: #fff;
}
.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #47b2e4;
  color: #fff;
}
.contact .php-email-form {
  width: 100%;
  border-top: 3px solid #47b2e4;
  border-bottom: 3px solid #47b2e4;
  padding: 30px;
  background: #fff;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}
#hero {
  background-image: url('/images/back.jpg');
  background-size: cover;
  background-position: center;
  color: #fff;
  height: 85vh;
}
.container .row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.container-row {
  text-align: center;
}
.container-row h1 {
  font-size: 50px;
  margin-top: 50px;
  margin-bottom: 130px;
}
.container-row h2 {
  font-size: 24px;
  margin-bottom: 20px;
}
.container-row p {
  margin-bottom: 20px;
}
.btn-get-started {
  display: inline-block;
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}
.btn-get-started:hover {
  background-color: #0056b3;
}
.logo{
  margin-left: 20px;
  font-size: 30px;
  font-weight: bold;
}
.wrapper {
  width: 85%;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  align-items: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h1 {
  text-align: center;
  color: #333;
  font-size: 20px;
}
.wrapper-students{
  background-color:transparent;
  width: 100%;
  height: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}
</style>
<link rel="stylesheet" href="/css/main.css">
@section('content')
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contact</h2>
      <p style="margin-left: 100px;">Contact us for inquiries, feedback, or collaboration opportunities. Our dedicated team is here to assist you promptly via email or phone.</p>
    </div>
    <div class="row">
      {{-- <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Kibabii University,Bungoma, Kenya</p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>support@gmail.com</p>
          </div>
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+254745828667</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6209330969987!2d34.55668027403686!3d0.5699311635882006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781d7f6c0b8b5fd%3A0xfbefa866bb38e940!2sKibabii%20University!5e0!3m2!1sen!2ske!4v1707822377275!5m2!1sen!2ske" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div> --}}
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" style="display: flex;">
        <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Kibabii University,Bungoma, Kenya</p>
          </div>
          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>support@gmail.com</p>
          </div>
          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+254745828667</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6209330969987!2d34.55668027403686!3d0.5699311635882006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781d7f6c0b8b5fd%3A0xfbefa866bb38e940!2sKibabii%20University!5e0!3m2!1sen!2ske!4v1707822377275!5m2!1sen!2ske" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
        <form action="/contact" method="POST" class="application-form"  style="margin-top:">
          @csrf
          <h1>Contact Us Through this Form</h1>
          <fieldset class="details-group">
          
          <div class="padding">
            <div style="display: flex; padding-left: 30px; margin-top:60px; ">
              <label for="name" style="font-size: 20px;">Enter First Name:</label><br>
              <input type="text" id="first_name" name="first_name" style="width: 250px; height: 35px; margin-right:20px;">
              <label for="name" style="font-size: 20px;">Enter Last Name:</label>
              <input type="text" id="last_name" name="last_name" style="width: 250px; height: 35px; margin-right:20px;"><br>
            </div>
            <label for="email" style="font-size: 20px; margin-top:60px; margin-left:30px; margin-right:35px;">Enter Your Email:</label>
            <input type="email" id="email" name="email" required style="width:620px; height: 35px; margin-right:20px; "><br>
            <label for="subject" style="font-size: 20px; margin-top:60px; margin-left:30px;">Subject:</label>
            <input type="text" id="subject" name="subject" style="width: 650px; height: 35px; margin-right:20px;"><br>
            <label for="address" style="font-size: 20px; margin-top:80px; margin-left:30px;">Message:</label><br>
            <textarea id="address" name="address" rows="10" cols="110" required style="margin-left:30px;"></textarea>
            <div class="button-form" style="margin-left: 245px">
              <button id="clearButton">Clear All</button>
              <input type="submit" value="Submit">
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection