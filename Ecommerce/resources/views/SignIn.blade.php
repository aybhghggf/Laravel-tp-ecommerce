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
            <form class="space-y-6" id="signInForm">
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
                        <span class="px-4 bg-white text-gray-500 font-inter">Or continue with</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button 
                        type="button" 
                        class="auth-btn flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 font-inter font-medium text-gray-700"
                    >
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Google
                    </button>
                    <button 
                        type="button" 
                        class="auth-btn flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 font-inter font-medium text-gray-700"
                    >
                        <svg class="w-5 h-5 mr-2" fill="#1877F2" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook
                    </button>
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