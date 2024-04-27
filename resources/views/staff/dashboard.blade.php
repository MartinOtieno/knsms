<x-app-layout>
    <!-- Inside the head section of your HTML document, you can add the following styles -->
<style>
    /* Style for the welcome message */
    .welcome-message {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1rem;
    }
    /* Style for the overview section */
    .overview {
        color: #666;
        line-height: 1.6;
    }
    /* Style for the list items */
    .overview li {
        margin-bottom: 0.5rem;
        padding-left: 1.5rem;
        position: relative;
    }
    .overview li:before {
        content: "\2022"; /* Bullet point */
        position: absolute;
        left: 0;
        color: #1a202c; /* Bullet point color */
    }
</style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to admin dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                    <!-- ======= Hero Section ======= -->
                    <section id="hero1" class="d-flex align-items-center">
                        <!-- Inside the body section of your dashboard -->
                        <div class="py-6">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        <!-- Welcome message -->
                                        <h2 class="welcome-message">Welcome, {{ Auth::user()->name }}!</h2>
                                        
                                        <!-- Overview section -->
                                        <p class="overview">Here's a quick overview of your staff dashboard:</p>
                                        <ul class="overview">
                                            <li>View applications submitted by students.</li>
                                            <li>Track contributions from donors.</li>
                                            <li>Manage staff members in the staff list.</li>
                                            {{-- <li>And much more!</li> --}}
                                        </ul>
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
