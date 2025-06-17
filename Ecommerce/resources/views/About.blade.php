@extends('layouts.basic')
@section('title')
About
@endsection

@section('About')
<div class="bg-amber-50 min-h-screen">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-b from-amber-100 to-amber-50 py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-amber-900 mb-6">Our Fragrance Story</h1>
            <p class="text-xl text-amber-700 max-w-3xl mx-auto">Crafting timeless scents since 1985</p>
        </div>
    </div>

    <!-- History Section -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2">
                <img src="{{ asset('images/labo.jpeg') }}" 
                     alt="Our perfume laboratory" 
                     class="rounded-2xl shadow-xl w-full h-auto object-cover">
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-serif font-bold text-amber-900 mb-6">A Legacy of Scent</h2>
                <div class="space-y-4 text-amber-800">
                    <p>Founded in Paris in 1985 by master perfumer Élise Laurent, our house began as a small atelier crafting bespoke fragrances for discerning clients. What started as a passion project quickly gained recognition for its innovative compositions.</p>
                    <p>In 1992, we launched our first commercial fragrance, "Midnight Elegance," which remains our signature scent to this day. The 2000s saw our expansion into international markets while maintaining our commitment to artisanal quality.</p>
                    <p>Today, under the creative direction of Élise's daughter Sophie, we continue to blend traditional techniques with modern creativity, sourcing the finest ingredients from around the world.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Philosophy Section -->
    <div class="bg-amber-100 py-16">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto mb-12">
                <h2 class="text-3xl font-serif font-bold text-amber-900 mb-4">Our Philosophy</h2>
                <p class="text-amber-700">We believe fragrance should tell a story and evoke emotion, not just mask odors.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <div class="text-amber-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-semibold text-amber-900 mb-3">Artisan Craftsmanship</h3>
                    <p class="text-amber-700">Each fragrance is handcrafted in small batches using traditional techniques passed down through generations of perfumers.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <div class="text-amber-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-semibold text-amber-900 mb-3">Slow Perfumery</h3>
                    <p class="text-amber-700">Our scents mature for months, not days, allowing the ingredients to fully harmonize and develop their true character.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                    <div class="text-amber-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-semibold text-amber-900 mb-3">Sustainable Sourcing</h3>
                    <p class="text-amber-700">We partner with ethical growers worldwide, ensuring fair trade practices and environmental stewardship at every step.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container mx-auto px-6 py-16">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-serif font-bold text-amber-900 mb-4">Meet Our Perfumers</h2>
            <p class="text-amber-700 max-w-2xl mx-auto">The creative minds behind our iconic fragrances</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-48 h-48 mx-auto mb-6 overflow-hidden rounded-full border-4 border-amber-200">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Sophie Laurent" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-serif font-semibold text-amber-900">Sophie Laurent</h3>
                <p class="text-amber-600 mb-2">Creative Director</p>
                <p class="text-amber-700 text-sm">Daughter of our founder, Sophie brings modern creativity while honoring traditional techniques.</p>
            </div>
            
            <div class="text-center">
                <div class="w-48 h-48 mx-auto mb-6 overflow-hidden rounded-full border-4 border-amber-200">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Jean-Michel Bernard" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-serif font-semibold text-amber-900">Jean-Michel Bernard</h3>
                <p class="text-amber-600 mb-2">Master Perfumer</p>
                <p class="text-amber-700 text-sm">With 30 years experience, Jean-Michel is our expert in rare and precious ingredients.</p>
            </div>
            
            <div class="text-center">
                <div class="w-48 h-48 mx-auto mb-6 overflow-hidden rounded-full border-4 border-amber-200">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                         alt="Amira Khan" 
                         class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-serif font-semibold text-amber-900">Amira Khan</h3>
                <p class="text-amber-600 mb-2">Head of Sustainability</p>
                <p class="text-amber-700 text-sm">Amira ensures our ingredients are ethically sourced with minimal environmental impact.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-amber-900 text-amber-50 py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif font-bold mb-6">Experience Our Craft</h2>
            <p class="text-xl text-amber-100 mb-8 max-w-3xl mx-auto">Discover the artistry behind every bottle with our boutique perfumery experience</p>
            <a href="{{ route('Perfumes.show') }}" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-8 rounded-lg transition duration-200">
                Explore Our Collection
            </a>
        </div>
    </div>
</div>
@endsection