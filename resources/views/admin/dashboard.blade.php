<x-app-layout>
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
    
        /* Style for the cards */
        .overview .grid {
            margin-top: 1rem;
        }
    
        .overview .grid > div {
            padding: 1.5rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
    
        .overview .grid > div:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    
        .overview h3 {
            margin-bottom: 0.5rem;
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
                        <div class="py-6">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-82">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        <!-- Welcome message -->
                                        <h2 class="welcome-message">Welcome, Admin!</h2>
                                        
                                        <!-- Overview section -->
                                        <div class="overview">
                                            <p class="mb-4">Here's a summary of key activities:</p>
                                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                                <!-- Cards for different activities -->
                                                <div class="bg-blue-200 p-4 rounded-md">
                                                    <h3 class="text-lg font-semibold text-blue-800 mb-2">Applications</h3>
                                                    <p class="text-gray-700">View and manage student applications.</p>
                                                </div>
                                                <div class="bg-green-200 p-4 rounded-md">
                                                    <h3 class="text-lg font-semibold text-green-800 mb-2">Contributions</h3>
                                                    <p class="text-gray-700">Track donations and contributions.</p>
                                                </div>
                                                <div class="bg-yellow-200 p-4 rounded-md">
                                                    <h3 class="text-lg font-semibold text-yellow-800 mb-2">Staff List</h3>
                                                    <p class="text-gray-700">Manage staff members and roles.</p>
                                                </div>
                                                <!-- Add more cards for additional features -->
                                            </div>
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
