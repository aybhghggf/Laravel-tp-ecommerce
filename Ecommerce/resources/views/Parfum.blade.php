@extends('layouts.basic')
@section('title') {{ $produit->nom_de_parfum }} @endsection
@section('Parfum')
<div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        
        <!-- Left Side - Product Image -->
        <div class="space-y-6">
            <div class="product-card rounded-3xl p-8 floating-animation">
                <img 
                    src="https://images.unsplash.com/photo-1594035910387-fea47794261f?w=600&h=600&fit=crop" 
                    alt="Midnight Elegance Perfume" 
                    class="w-full h-96 lg:h-[500px] object-cover rounded-2xl image-zoom shadow-2xl"
                >
            </div>
        </div>
        
        <!-- Right Side - Product Information -->
        <div class="space-y-8">
            <!-- Product Header -->
            <div>
                <h1 class="text-4xl lg:text-5xl font-bold gold-text mb-4">
                    {{ $produit->nom_de_parfum }}
                </h1>
                <p class="text-black text-lg">
                    Eau de Parfum • 50ml
                </p>
            </div>
            
            <!-- Rating & Reviews -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-1">
                    <span class="text-yellow-400">★★★★★</span>
                    <span class="text-black ml-2">(4.8)</span>
                </div>
                <span class="text-black">|</span>
                <span class="text-black">127 Reviews</span>
            </div>
            
            <!-- Price -->
            <div class="flex items-center space-x-4">
                <span class="text-4xl font-bold gold-text">{{ $produit->prix }} </span>
                <span class="text-xl text-black line-through">$---------</span>
            </div>
            
            <!-- Availability Status -->
            @if ($produit->disponible == 1)
                <div class="flex items-center space-x-3">
                    <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-green-600 font-semibold text-lg">In Stock</span>
                    <span class="text-black">• 12 items available</span>
                </div>
            @else
                <div class="flex items-center space-x-3">
                    <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                    <span class="text-red-600 font-semibold text-lg">Not Available</span>
                </div>
            @endif

            <!-- Product Description -->
            <div class="product-card rounded-2xl p-6">
                <h3 class="text-xl font-bold gold-text mb-4">Description</h3>
                <p class="text-black leading-relaxed mb-4">
                    {{ $produit->description }}
                </p>
                <p class="text-black leading-relaxed">
                    The base notes of Indian sandalwood, white musk, and amber create a warm, sensual finish 
                    that lingers beautifully on the skin. Perfect for evening wear and special occasions.
                </p>
            </div>
            
            <!-- Fragrance Notes -->
            <div class="product-card rounded-2xl p-6">
                <h3 class="text-xl font-bold gold-text mb-4">Fragrance Notes</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center">
                        <div class="feature-icon w-12 h-12 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-xl">🍋</span>
                        </div>
                        <h4 class="font-semibold gold-text">Top Notes</h4>
                        <p class="text-sm text-black">Bergamot, Lemon</p>
                    </div>
                    <div class="text-center">
                        <div class="feature-icon w-12 h-12 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-xl">🌸</span>
                        </div>
                        <h4 class="font-semibold gold-text">Heart Notes</h4>
                        <p class="text-sm text-black">Jasmine, Rose</p>
                    </div>
                    <div class="text-center">
                        <div class="feature-icon w-12 h-12 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-xl">🪵</span>
                        </div>
                        <h4 class="font-semibold gold-text">Base Notes</h4>
                        <p class="text-sm text-black">Sandalwood, Amber</p>
                    </div>
                </div>
            </div>

            @if ($produit->disponible == 1)
                <!-- Buy Now Button -->
                <button id="byNow" class="w-full bg-black text-white py-4 px-8 rounded-xl text-lg font-bold hover:bg-gray-800 transition-colors">
                    Buy Now
                </button>
            @else
                <!-- More prominent unavailable notice -->
                <div class="bg-amber-50 border border-amber-200 rounded-lg p-6 text-center shadow-sm">
                    <div class="flex flex-col items-center">
                        <svg class="h-12 w-12 text-amber-500 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <h3 class="text-lg font-medium text-amber-800 mb-2">Out of Stock</h3>
                        <p class="text-amber-700 mb-4 max-w-md">This product is currently unavailable. Expected restock date: <span class="font-semibold">{{ $produit->out_of_stock }}</span></p>
                        <div class="w-full max-w-xs">
                            <div class="flex items-center">
                                <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 border border-amber-300 rounded-l-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                                <button class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-r-lg transition duration-200">
                                    Notify Me
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <!-- Hidden Checkout Form -->
<!-- Error Messages -->
@if ($errors->any())
    <div class="mb-6">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Whoops!</strong>
            <span class="block">There were some problems with your input:</span>
            <ul class="mt-2 list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<div id="checkout-form" style="display: none;" class="bg-white p-6 rounded-lg shadow-md mt-8">
    <h3 class="text-xl font-bold text-gray-800 mb-6">Complete Your Order</h3>
    <form action="{{ route('StoreCommande') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Full Name -->
            <div class="col-span-1">
                <label for="full-name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input 
                    type="text" 
                    id="full-name" 
                    name="full_name" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                    placeholder="John Doe"
                >
            </div>
            
            <!-- Email -->
            <div class="col-span-1">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                    placeholder="your@email.com"
                >
            </div>
            
            <!-- Phone -->
            <div class="col-span-1">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                    placeholder="+1 (555) 123-4567"
                >
            </div>
            
            <!-- Quantity -->
            <div class="col-span-1">
                <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
                <input 
                    type="number" 
                    id="quantity" 
                    name="quantity" 
                    min="1" 
                    value="1" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                >
            </div>
            
            <!-- Address (Full width) -->
            <div class="col-span-2">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Full Address</label>
                <textarea 
                    id="address" 
                    name="address" 
                    rows="3" 
                    required 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-amber-500 focus:border-amber-500"
                    placeholder="Street, City, Postal Code, Country"
                ></textarea>
            </div>
        </div>
        <div class="mt-6">
            <button 
                type="submit" 
                class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-4 rounded-md transition duration-200"
            >
                Complete Purchase
            </button>
        </div>
    </form>    
    <!-- Submit Button -->
</div>

</div>
            <!-- Product Features -->
            <div class="grid grid-cols-2 gap-4">
                <div class="feature-icon rounded-xl p-4 text-center">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                    </div>
                    <p class="text-sm text-black">Free Shipping</p>
                </div>
                <div class="feature-icon rounded-xl p-4 text-center">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                        </svg>
                    </div>
                    <p class="text-sm text-black">30-Day Returns</p>
                </div>
                <div class="feature-icon rounded-xl p-4 text-center">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </div>
                    <p class="text-sm text-black">Gift Wrapping</p>
                </div>
                <div class="feature-icon rounded-xl p-4 text-center">
                    <div class="flex justify-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <p class="text-sm text-black">Secure Payment</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection