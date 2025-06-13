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
            <div class="lg:w-3/4 mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        @foreach ($produits as $produit)
            <!-- Single Product Card -->
            <div class="perfume-card rounded-2xl overflow-hidden floating-animation">
                <!-- Product Image -->
                <div class="relative">
                    <img 
                        src="{{ asset($produit->path_image) }}" 
                        alt="Midnight Elegance Perfume" 
                        class="w-full h-64 object-cover"
                    >
                    <!-- Stock Badge -->
                    <div class="absolute top-4 right-4">
                        @if($produit->disponible == 1)
                            <span class="text-white text-xs font-bold px-3 py-1 rounded-full bg-green-500">
                                In Stock
                            </span>
                        @else
                            <span class="text-white text-xs font-bold px-3 py-1 rounded-full bg-red-500">
                                Rupture de stock
                            </span>
                        @endif
                    </div>
                </div>

                <!-- Product Details -->
                <div class="p-6">
                    <h3 class="text-xl font-bold gold-text mb-2">
                        {{ $produit->nom_de_parfum }}
                    </h3>

                    <p class="text-gray-300 text-sm mb-4 line-clamp-3">
                        {{ $produit->description }}
                    </p>

                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-bold gold-text">{{ $produit->prix }} MAD</span>
                            <span class="text-sm text-gray-400 line-through">225 MAD</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            50ml
                        </div>
                    </div>

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
        @endforeach
    </div>
</div>

        </div>
    </div>
@endsection
