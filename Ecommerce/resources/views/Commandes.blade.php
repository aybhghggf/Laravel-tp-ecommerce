@extends('layouts.basic')
@section('title')
Commandes
@endsection
@section('commandes')
<div class="bg-amber-50 min-h-screen py-12">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl font-serif font-bold text-amber-900 mb-4">My Orders</h1>
            <p class="text-lg text-amber-700">Review your purchase history and order status</p>
        </div>
        @if( $commandes->count())
        <!-- Orders Table -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Table Header -->
            <div class="grid grid-cols-12 bg-amber-100 px-6 py-4 font-medium text-amber-900">
                <div class="col-span-1">Order #</div>
                <div class="col-span-2">Date</div>
                <div class="hidden md:block md:col-span-2">Items</div>
                <div class="col-span-2">Quantity</div>
                <div class="col-span-2">Localisation</div>
                <div class="col-span-2">Total</div>
                <div class="col-span-2">Status</div>
            </div>
            @foreach ($commandes as $commande)
                <div class="grid grid-cols-12 items-center px-6 py-5 border-b border-amber-50 hover:bg-amber-50 transition">
                    <div class="col-span-1 font-medium text-amber-800">{{ $commande->id }}</div>
                    <div class="col-span-2 text-gray-600">{{ $commande->created_at }}</div>
                    <div class="hidden md:block md:col-span-2">
                        <div class="flex -space-x-2">
                            <span class="font-medium text-amber-800">{{ $commande->Produit }}</span>
                        </div>
                    </div>
                    <div class="col-span-2">
                        {{ $commande->quantite ?? $commande->quantity ?? '-' }}
                    </div>
                    <div class="col-span-2">
                        {{ $commande->adresse ?? '-' }}
                    </div>
                    <div class="col-span-2 font-medium">{{ $commande->total }}</div>
                    @if ($commande->confirmed == 1)
                        <div class="col-span-2">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">Confirmed</span>
                        </div>
                    @else
                        <div class="col-span-2">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">Not Confirmed</span>
                        </div>
                    @endif

                    <div class="md:hidden col-span-12 mt-3">
                        <a href="#" class="block w-full text-center text-sm text-amber-600 hover:text-amber-800 border border-amber-200 rounded-lg py-2">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
            @else
            
            <!-- Empty State (if no orders) -->
            <div class="p-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <h3 class="mt-4 text-lg font-medium text-amber-900">No orders yet</h3>
                <p class="mt-2 text-amber-700">Your order history will appear here</p>
                <a href="{{ route('Perfumes.show') }}" class="mt-6 inline-block bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg transition">Shop Now</a>
            </div>
        </div>
        @endif
        <!-- Order Details Modal -->
        <div id="order-details-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                <!-- Modal content will be loaded via JS -->
            </div>
        </div>
    </div>
</div>

@endsection