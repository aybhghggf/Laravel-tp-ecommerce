@extends('layouts.basic')
@section('Register')
<body class="bg-gradient-custom min-h-screen">


    <!-- Sign In Form -->
    <div class="flex items-center justify-center min-h-screen px-4 py-12">
        <div class="form-container max-w-md w-full rounded-2xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-playfair font-semibold text-gray-800 mb-2">
                    Create Account
                </h2>
                <p class="text-gray-600 font-inter">
                    Join our exclusive fragrance community
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-6" id="signInForm" method="POST" action="{{ route('Store.client') }}">
                @csrf
                <!-- First Name -->
                <div class="input-wrapper">
                    <input 
                        type="text" 
                        id="nom" 
                        name="nom"
                        placeholder=" "
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none font-inter text-gray-800 bg-white"
                        required
                    >
                    <label for="nom" class="floating-label absolute left-4 top-3 text-gray-500 font-inter">
                        Nom (First Name)
                    </label>
                </div>

                <!-- Last Name -->
                <div class="input-wrapper">
                    <input 
                        type="text" 
                        id="prenom" 
                        name="prenom"
                        placeholder=" "
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none font-inter text-gray-800 bg-white"
                        required
                    >
                    <label for="prenom" class="floating-label absolute left-4 top-3 text-gray-500 font-inter">
                        Prénom (Last Name)
                    </label>
                </div>

                <!-- Email -->
                <div class="input-wrapper">
                    <input 
                        type="email" 
                        id="email" 
                        name="email"
                        placeholder=" "
                        class="input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none font-inter text-gray-800 bg-white"
                        required
                    >
                    <label for="email" class="floating-label absolute left-4 top-3 text-gray-500 font-inter">
                        Email Address
                    </label>
                </div>

                <!-- Password -->
                <div class="input-wrapper relative">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        placeholder=" "
                        class="input-field w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:outline-none font-inter text-gray-800 bg-white"
                        required
                        minlength="6"
                    >
                    <label for="password" class="floating-label absolute left-4 top-3 text-gray-500 font-inter">
                        Password
                    </label>
                    <button 
                        type="button" 
                        id="togglePassword"
                        class="absolute right-3 top-3 text-gray-400 hover:text-gray-600 focus:outline-none"
                    >
                        <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Terms & Conditions -->
                <div class="flex items-start space-x-3">
                    <input 
                        type="checkbox" 
                        id="terms" 
                        name="terms"
                        class="mt-1 w-4 h-4 text-amber-600 border-gray-300 rounded focus:ring-amber-500 focus:ring-2"
                        required
                    >
                    <label for="terms" class="text-sm text-gray-600 font-inter leading-relaxed">
                        I agree to the 
                        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">Terms & Conditions</a> 
                        and 
                        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">Privacy Policy</a>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="form-btn w-full text-white py-3 px-4 rounded-lg font-inter font-medium text-lg shadow-lg"
                >
                    Create Account
                </button>

                <!-- Divider -->
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-500 font-inter">Or</span>
                    </div>
                </div>
                <!-- Login Link -->
                <div class="text-center pt-4">
                    <p class="text-gray-600 font-inter">
                        Already have an account? 
                        <a href="#" class="text-amber-600 hover:text-amber-700 font-medium">Sign in here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection