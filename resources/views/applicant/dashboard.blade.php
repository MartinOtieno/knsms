<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="margin-bottom: 20px;">
            <div class="bg-white overfldow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <p class="mssg"> {{ session('mssg') }}</p>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                    <!-- ======= Hero Section ======= -->
                    <section id="hero" class="d-flex align-items-center" style="background-color: blue;">
                        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                                             
                            <div class="row icon-boxes">
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                            </div>
                  
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="ri-palette-line"></i></div>
                                    <h4 class="title"><a href="route('students.apply')">Apply</a></h4>
                                    <p class="description">Please Make your Application for financial services</p>
                                </div>
                            </div>
                          </div>
                  
                        </div>
                      </div>
                    </section><!-- End Hero -->
                  
                    <!-- Vendor JS Files -->
                    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
                    <script src="/assets/vendor/aos/aos.js"></script>
                    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
                    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
                    <script src="/assets/vendor/php-email-form/validate.js"></script>
                  
                    <!-- Template Main JS File -->
                    <script src="/assets/js/main.js"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
