@extends('layouts.basic')
@section('Login')
<div class="flex items-center justify-center min-h-screen px-4 py-12">
        <div class="form-container max-w-md w-full rounded-2xl shadow-2xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-playfair font-semibold text-gray-800 mb-2">
                    Welcome Back
                </h2>
                <p class="text-gray-600 font-inter">
                    Sign in to your Eparfums account
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-6" id="loginForm" method="POST" action="{{ route('Auth') }}">
                @csrf
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

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            class="w-4 h-4 text-amber-600 border-gray-300 rounded focus:ring-amber-500 focus:ring-2"
                        >
                        <label for="remember" class="ml-3 text-sm text-gray-600 font-inter">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot-link text-sm text-amber-600 hover:text-amber-700 font-inter font-medium">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="form-btn w-full text-white py-3 px-4 rounded-lg font-inter font-medium text-lg shadow-lg"
                >
                    Sign In
                </button>

                <!-- Sign Up Link -->
                <div class="text-center pt-6">
                    <p class="text-gray-600 font-inter">
                        Don't have an account? 
                        <a href="{{ route('sign.show') }}" class="text-amber-600 hover:text-amber-700 font-medium">Create one here</a>
                    </p>
                </div>
            </form>

            <!-- Additional Info -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="text-center">
                    <p class="text-xs text-gray-500 font-inter mb-4">
                        By signing in, you agree to our Terms of Service and Privacy Policy
                    </p>
                    <div class="flex justify-center items-center space-x-4 text-xs text-gray-400">
                       
                        <span>•</span>
                        <a href="{{ route('About') }}" class="hover:text-amber-600 transition-colors">About</a>
                        <span>•</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

