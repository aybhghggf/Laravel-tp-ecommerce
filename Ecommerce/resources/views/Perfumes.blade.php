@extends('layouts.basic')
@section('Perfumes')
<div class="container mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold gold-text mb-4">
                Luxury Fragrance Collection
            </h1>
            <p class="text-gray-300 text-lg">
                Discover our exquisite range of premium perfumes
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Sidebar - Price Filter -->
            <div class="lg:w-1/4">
                <div class="filter-card rounded-2xl p-6 sticky top-8">
                    <h2 class="text-2xl font-bold gold-text mb-6">
                        Filter by Price
                    </h2>
                    
                    <form class="space-y-6" action="" method="GET">
                        <div>
                            <label for="min_price" class="block text-sm font-medium text-gray-300 mb-2">
                                Minimum Price ($)
                            </label>
                            <input 
                                type="number" 
                                id="min_price" 
                                name="min_price" 
                                placeholder="0"
                                min="0"
                                class="gold-input w-full px-4 py-3 rounded-lg"
                            >
                        </div>
                        
                        <div>
                            <label for="max_price" class="block text-sm font-medium text-gray-300 mb-2">
                                Maximum Price ($)
                            </label>
                            <input 
                                type="number" 
                                id="max_price" 
                                name="max_price" 
                                placeholder="1000"
                                min="0"
                                class="gold-input w-full px-4 py-3 rounded-lg"
                            >
                        </div>
                        
                        <button 
                            type="submit" 
                            class="gold-button w-full py-3 px-6 rounded-lg text-lg font-semibold"
                        >
                            Apply Filter
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Content - Product Grid -->
            <div class="lg:w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    
                    <!-- Single Product Card -->
                    <div class="perfume-card rounded-2xl overflow-hidden floating-animation">
                        <!-- Product Image -->
                        <div class="relative">
                            <img 
                                src="https://images.unsplash.com/photo-1594035910387-fea47794261f?w=400&h=300&fit=crop" 
                                alt="Midnight Elegance Perfume" 
                                class="w-full h-64 object-cover"
                            >
                            <!-- Stock Badge -->
                            <div class="absolute top-4 right-4">
                                <span class="stock-badge text-white text-xs font-bold px-3 py-1 rounded-full">
                                    In Stock
                                </span>
                            </div>
                            <!-- Discount Badge (if any) -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                                    -15%
                                </span>
                            </div>
                        </div>
                        
                        <!-- Product Details -->
                        <div class="p-6">
                            <!-- Product Name -->
                            <h3 class="text-xl font-bold gold-text mb-2">
                                Midnight Elegance
                            </h3>
                            
                            <!-- Product Description -->
                            <p class="text-gray-300 text-sm mb-4 line-clamp-3">
                                A sophisticated blend of bergamot, jasmine, and sandalwood. This enchanting fragrance captures the essence of elegance with its deep, mysterious notes that evolve beautifully throughout the day.
                            </p>
                            
                            <!-- Price -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold gold-text">$189</span>
                                    <span class="text-sm text-gray-400 line-through">$225</span>
                                </div>
                                <div class="text-sm text-gray-400">
                                    50ml
                                </div>
                            </div>
>
                            
                            <!-- Action Buttons -->
                            <div class="flex space-x-2">
                                <button class="gold-button flex-1 py-2 px-4 rounded-lg text-sm font-semibold">
                                    Add to Cart
                                </button>
                                <button class="border border-gray-600 text-gray-300 hover:bg-gray-800 transition-colors py-2 px-4 rounded-lg text-sm">
                                    ♡
                                </button>
                            </div>
                            
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
