<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    @if(session('success'))
        <div class="fixed top-20 right-4 flex items-center p-4 mb-4 rounded-lg shadow-lg bg-gradient-to-r from-green-500 to-green-600 text-white transform transition-all duration-500 ease-in-out hover:scale-105 z-40" role="alert" x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="flex-shrink-0 w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @elseif(session('error'))
        <div class="fixed top-20 right-4 flex items-center p-4 mb-4 rounded-lg shadow-lg bg-gradient-to-r from-red-500 to-red-600 text-white transform transition-all duration-500 ease-in-out hover:scale-105 z-40" role="alert" x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 3000)">
            <svg class="flex-shrink-0 w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
            </svg>
            <span class="font-medium">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-400 to-amber-600 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h1 class="text-2xl font-playfair font-semibold logo-text">
                            Eperfumes
                        </h1>
                    </div>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('Home.show') }}" class="nav-link text-gray-800 hover:text-amber-600 px-3 py-2 text-sm font-inter font-medium">
                            Home
                        </a>
                        <a href="{{ route('Perfumes.show') }}" class="nav-link text-gray-800 hover:text-amber-600 px-3 py-2 text-sm font-inter font-medium">
                            Perfumes
                        </a>
                        <a href="{{ route('About') }}" class="nav-link text-gray-800 hover:text-amber-600 px-3 py-2 text-sm font-inter font-medium">
                            About
                        </a>
                    </div>
                </div>

               @auth
<!-- Dropdown Container -->
<div class="hidden md:block relative group">
    <!-- Dropdown Button -->
    <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-amber-500">
        Account
        <!-- Chevron Icon -->
        <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <!-- Dropdown Menu -->
    <div class="absolute right-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-200">
        <div class="py-1">
            <a href="{{ route('Commandes.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                My Orders
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@else
<div class="hidden md:block ml-10 space-x-4">
    <a href="{{ route('login.show') }}" class="text-gray-600 hover:text-gray-800 px-4 py-2 text-sm font-inter font-medium border border-gray-300 rounded-lg hover:bg-gray-50">
        Login
    </a>
    <a href="{{ route('sign.show') }}" class="bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-2 text-sm font-inter font-medium rounded-lg hover:from-amber-600 hover:to-amber-700 shadow-md">
        Register
    </a>
</div>
@endauth

<!-- Mobile menu button -->
<div class="md:hidden">
    <button id="mobile-menu-btn" class="text-gray-700 hover:text-amber-600 focus:outline-none focus:text-amber-600">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-80 bg-white shadow-2xl md:hidden z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
    <div class="p-6">
        <!-- Close button -->
        <div class="flex justify-end mb-8">
            <button id="close-menu-btn" class="text-gray-700 hover:text-amber-600">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Navigation Links -->
        <div class="space-y-6">
            <a href="{{ route('Home.show') }}" class="block text-gray-800 hover:text-amber-600 text-lg font-inter font-medium py-2 border-b border-gray-100">
                Home
            </a>
            <a href="{{ route('Perfumes.show') }}" class="block text-gray-800 hover:text-amber-600 text-lg font-inter font-medium py-2 border-b border-gray-100">
                Perfumes
            </a>
            <a href="{{ route('About') }}" class="block text-gray-800 hover:text-amber-600 text-lg font-inter font-medium py-2 border-b border-gray-100">
                About
            </a>
            
            <!-- Mobile Auth Links -->
            @auth
            <div class="pt-4 space-y-2">
                <a href="{{ route('Commandes.show') }}" class="block w-full text-gray-600 hover:text-gray-800 px-4 py-3 text-sm font-inter font-medium border border-gray-300 rounded-lg hover:bg-gray-50">
                    My Orders
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left text-gray-600 hover:text-white hover:bg-amber-600 px-4 py-3 text-sm font-inter font-medium border border-gray-300 rounded-lg transition-colors duration-200">
                        Logout
                    </button>
                </form>
            </div>
            @else
            <div class="pt-4 space-y-4">
                <a href="{{ route('login.show') }}" class="block w-full text-gray-600 hover:text-gray-800 px-4 py-3 text-sm font-inter font-medium border border-gray-300 rounded-lg hover:bg-gray-50">
                    Login
                </a>
                <a href="{{ route('sign.show') }}" class="block w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-3 text-sm font-inter font-medium rounded-lg hover:from-amber-600 hover:to-amber-700 shadow-md">
                    Register
                </a>
            </div>
            @endauth
        </div>
    </div>
</div>
        </div>
        <!-- Mobile Menu Overlay -->
        <div id="menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden z-40"></div>
    </nav>
    <main>
        @yield('Home')
        @yield('Perfumes')
        @yield('About')
        @yield('Register')
        @yield('Login')
        @yield('Parfum')
        @yield('commandes')
    </main>
    <x-footer />
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/confirmation.js') }}"></script>
</body>
</html>
