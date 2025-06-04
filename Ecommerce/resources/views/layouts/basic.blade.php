<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Navigation</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
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

                <!-- Desktop Auth Buttons -->
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center space-x-4">
                        <a href="{{ route('sign.show') }}" class="auth-btn text-gray-600 hover:text-gray-800 px-4 py-2 text-sm font-inter font-medium border border-gray-300 rounded-lg hover:bg-gray-50">
                            Sign In
                        </a>
                        <a href="/login" class="auth-btn bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-2 text-sm font-inter font-medium rounded-lg hover:from-amber-600 hover:to-amber-700 shadow-md hover:shadow-lg">
                            Login
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-amber-600 focus:outline-none focus:text-amber-600">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-80 bg-white shadow-2xl md:hidden z-50">
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
                    <a href="#home" class="block text-gray-800 hover:text-amber-600 text-lg font-inter font-medium py-2 border-b border-gray-100">
                        Home
                    </a>
                    <a href="#perfumes" class="block text-gray-800 hover:text-amber-600 text-lg font-inter font-medium py-2 border-b border-gray-100">
                        Perfumes
                    </a>
                    <a href="#about" class="block text-gray-800 hover:text-amber-600 text-lg font-inter font-medium py-2 border-b border-gray-100">
                        About
                    </a>
                </div>

                <!-- Mobile Auth Buttons -->
                <div class="mt-8 space-y-4">
                    <button class="w-full text-gray-600 hover:text-gray-800 px-4 py-3 text-sm font-inter font-medium border border-gray-300 rounded-lg hover:bg-gray-50">
                        Sign In
                    </button>
                    <button class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-3 text-sm font-inter font-medium rounded-lg hover:from-amber-600 hover:to-amber-700 shadow-md">
                        Login
                    </button>
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
    </main>
</body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>