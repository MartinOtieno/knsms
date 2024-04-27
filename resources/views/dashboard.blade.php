<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're now logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="mssg" style="color: green; font-size:20px;"> {{ session('mssg')}} </p>
    </div>
    <section id="hero1" class="d-flex align-items-center">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- Welcome message -->
                        <h2 class="welcome-message">Welcome, {{ Auth::user()->name }}!</h2>
                        
                        <!-- Overview section -->
                        <div class="overview">
                            <p class="mb-4">Here's a summary of your dashboard:</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Cards for different features -->
                                <div class="bg-yellow-200 p-4 rounded-md">
                                    <h3 class="text-lg font-semibold text-yellow-800 mb-2">My Applications</h3>
                                    <p class="text-gray-700">View and manage your submitted applications.</p>
                                </div>
                                <div class="bg-blue-200 p-4 rounded-md">
                                    <h3 class="text-lg font-semibold text-blue-800 mb-2">My Profile</h3>
                                    <p class="text-gray-700">Update your personal information and preferences.</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
