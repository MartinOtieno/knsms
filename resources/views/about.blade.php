@extends('layouts.layout')

@section('content')
<style>
.container {
    margin: 0 auto;
}
.section-title {
    text-align: center;
    margin-top: 100px
}
.section-title h2 {
    color: #333;
    font-size: 36px;
    margin: 0;
}
.content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.content p {
    color: #666;
}
.content ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    color: #666;
}
.content ul li {
    position: relative;
}
.content ul li:before {
    content: "\2022";
    position: absolute;
    left: 0;
    color: #007bff;
}
.btn-learn-more {
    display: inline-block;
    background-color: #666;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
    margin-bottom: 20px;
}
.btn-learn-more:hover {
    background-color: #0056b3;
}
.col-lg-6{
  margin-left: 100px;
  margin-right: 100px;
  width: 400px:
  align-content: center;
  align-items: center;
  justify-items: center;
  justify-content: center;
}
</style>
<link rel="stylesheet" href="main.css">
  </header>
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
        </div>
        <div class="row content">
          <div class="col-lg-6">
            <div>
              <p>
                <strong>Needy Student Management System:</strong> Streamlining support for students in need with seamless communication and
                 comprehensive solutions, fostering a supportive and inclusive learning environment.<br>We provide support to following <strong>categories</strong> of students:
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Financial hardships.</li>
                <li><i class="ri-check-double-line"></i>Academic difficulties.</li>
                <li><i class="ri-check-double-line"></i>Disability.</li>
                <li><i class="ri-check-double-line"></i>Orphans.(Both Partial and Total Orphan)</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Needy Student Management System website is to create 
              a centralized platform that efficiently facilitates communication 
              and provides comprehensive support services for students facing various challenges, 
              aiming to foster a supportive and inclusive learning environment within educational institutions.
            </p>
            <a href="learn.html" class="btn-learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </section>
    @endsection