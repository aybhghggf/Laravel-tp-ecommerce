@extends('layouts.basic')
@section('Home')
<section class="min-h-screen bg-white dark:bg-gray-900 relative overflow-hidden">
    <!-- Subtle pattern background -->
    <div class="absolute inset-0 opacity-5">
        <svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg">
            <pattern id="grid" width="60" height="60" patternUnits="userSpaceOnUse">
                <path d="m 60,60 L 0,60 0,0" fill="none" stroke="currentColor" stroke-width="1"/>
            </pattern>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>
    
    <div class="container mx-auto px-6 lg:px-12 relative z-20">
        <div class="min-h-screen flex items-center">
            <div class="w-full lg:w-1/2 flex flex-col justify-center">
                <!-- Minimal accent -->
                <div class="w-16 h-0.5 bg-amber-500 mb-12"></div>
                
                <!-- Elegant typography -->
                <h1 class="font-bebas-neue uppercase text-6xl sm:text-8xl lg:text-9xl font-black leading-tight text-gray-900 dark:text-white mb-8">
                    The power of
                    <span class="block text-amber-500">fragrance</span>
                </h1>
                
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-light text-gray-600 dark:text-gray-300 mb-8 italic">
                    the art of presence
                </h2>
                
                <!-- Clean description -->
                <p class="text-lg text-gray-700 dark:text-gray-300 max-w-lg mb-12 leading-relaxed">
                    Experience the transformative power of scent. Where memory meets emotion, and presence becomes art.
                </p>
                
                <!-- Refined buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('Perfumes.show') }}" class="group inline-flex items-center justify-center px-10 py-4 bg-gray-900 dark:bg-white text-white dark:text-gray-900 text-sm font-semibold uppercase tracking-wider hover:bg-amber-500 dark:hover:bg-amber-500 dark:hover:text-white transition-all duration-500 hover:shadow-xl hover:shadow-gray-900/20">
                        Discover Now
                    </a>
                    
                    <a href="{{ route('About') }}" class="group inline-flex items-center justify-center px-10 py-4 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white text-sm font-semibold uppercase tracking-wider hover:border-amber-500 hover:text-amber-500 transition-all duration-300">
                        Our Story
                    </a>
                </div>
            </div>
            
            <!-- Elegant image placement -->
            <div class="hidden lg:block lg:w-1/2 relative">
                <div class="relative ml-12">
                    <div class="absolute -top-6 -left-6 w-full h-full border border-amber-500/20 rounded-lg"></div>
                    <img src="{{ asset('images/heropic.jpeg') }}" 
                         alt="Perfume Collection" 
                         class="w-full h-96 object-cover rounded-lg shadow-2xl" />
                </div>
            </div>
        </div>
    </div>


    <div class="text-center p-8 bg-gradient-to-br from-white via-gray-00 to-white">
       <h2 class="font-bold text-3xl sm:text-4xl md:text-5xl lg:text-6xl gold-text mb-4 sparkle text-black">
          Why Choose Our Eperfumes Fragrances?
       </h2>
       <p class="text-gray-900 text-lg max-w-2xl mx-auto mb-16">
          Discover the art of perfumery with our exclusive collection of handcrafted fragrances
       </p>
       
       <!-- Feature 1 -->
       <div class="flex flex-wrap items-center mt-20 text-left">
          <div class="w-full md:w-3/5 lg:w-1/2 px-4">
             <div class="perfume-card rounded-2xl p-6 transition-all duration-500 floating-animation">
                <img src="{{ asset('images/Artisan Craftsmanship.jpeg') }}" 
                    alt="Artisan Craftsmanship" 
                    class="w-full h-60 object-cover rounded-xl shadow-2xl">
             </div>
          </div>
          <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center md:text-left lg:pl-12">
             <h3 class="font-bold mt-8 text-2xl md:mt-0 sm:text-3xl gold-text text-black">
                Artisan Craftsmanship
             </h3>
             <p class="sm:text-lg mt-6 text-gray-900 leading-relaxed">
                Each fragrance is meticulously crafted by master perfumers using the finest ingredients 
                sourced from around the world. Our time-honored techniques ensure every bottle contains 
                a unique olfactory masterpiece that tells your personal story.
             </p>
             <div class="mt-4 flex items-center">
                <div class="w-12 h-1 gold-gradient rounded-full"></div>
             </div>
          </div>
       </div>
       
       <!-- Feature 2 -->
       <div class="flex flex-wrap items-center mt-20 text-left">
          <div class="w-full md:w-3/5 lg:w-1/2 px-4">
             <div class="perfume-card rounded-2xl p-6 transition-all duration-500 floating-animation" style="animation-delay: -2s;">
                <img src="{{ asset('images/Rare & Precious Ingredients.jpeg') }}" 
                    alt="Rare Ingredients" 
                    class="w-full h-60 object-cover rounded-xl shadow-2xl">
             </div>
          </div>
          <div class="w-full md:w-2/5 lg:w-1/2 px-4 md:order-first text-center md:text-left lg:pr-12">
             <h3 class="font-bold mt-8 text-2xl md:mt-0 sm:text-3xl gold-text text-black">
                Rare & Precious Ingredients
             </h3>
             <p class="sm:text-lg mt-6 text-gray-900 leading-relaxed">
                We source only the most exquisite and rare ingredients: Bulgarian rose petals, 
                Madagascan vanilla, Indian sandalwood, and French lavender. Each ingredient is 
                carefully selected for its purity and potency to create unforgettable scent profiles.
             </p>
             <div class="mt-4 flex items-center md:justify-start justify-center">
                <div class="w-12 h-1 gold-gradient rounded-full"></div>
             </div>
          </div>
       </div>
       
       <!-- Feature 3 -->
       <div class="flex flex-wrap items-center mt-20 text-left">
          <div class="w-full md:w-3/5 lg:w-1/2 px-4">
             <div class="perfume-card rounded-2xl p-6 transition-all duration-500 floating-animation" style="animation-delay: -4s;">
                <img src="{{ asset('images/Long-lasting Excellence.jpeg') }}" 
                    alt="Long-lasting Formula" 
                    class="w-full h-60 object-cover rounded-xl shadow-2xl">
             </div>
          </div>
          <div class="w-full md:w-2/5 lg:w-1/2 px-4 text-center md:text-left lg:pl-12">
             <h3 class="font-bold mt-8 text-2xl md:mt-0 sm:text-3xl gold-text text-black">
                Long-lasting Excellence
             </h3>
             <p class="sm:text-lg mt-6 text-gray-900 leading-relaxed">
                Our advanced formulation techniques ensure exceptional longevity and sillage. 
                Experience fragrances that evolve beautifully throughout the day, revealing 
                different notes from morning to evening with remarkable staying power.
             </p>
             <div class="mt-4 flex items-center">
                <div class="w-12 h-1 gold-gradient rounded-full"></div>
             </div>
          </div>
       </div>
       
       <!-- Feature 4 -->
       <div class="flex flex-wrap items-center mt-20 text-left">
          <div class="w-full md:w-3/5 lg:w-1/2 px-4">
             <div class="perfume-card rounded-2xl p-6 transition-all duration-500 floating-animation" style="animation-delay: -1s;">
                <img src="{{ asset('images/Personalized Consultation.jpeg') }}" 
                    alt="Personalized Experience" 
                    class="w-full h-60 object-cover rounded-xl shadow-2xl">
             </div>
          </div>
          <div class="w-full md:w-2/5 lg:w-1/2 px-4 md:order-first text-center md:text-left lg:pr-12">
             <h3 class="font-bold mt-8 text-2xl md:mt-0 sm:text-3xl gold-text text-black">
                Personalized Consultation
             </h3>
             <p class="sm:text-lg mt-6 text-gray-900 leading-relaxed">
                Our fragrance experts provide personalized consultations to help you discover 
                your signature scent. Whether you prefer fresh and citrusy or deep and mysterious, 
                we'll guide you to the perfect fragrance that complements your unique personality.
             </p>
             <div class="mt-4 flex items-center md:justify-start justify-center">
                <div class="w-12 h-1 gold-gradient rounded-full"></div>
             </div>
          </div>
       </div>
       
       <!-- Call to Action -->
       <div class="mt-32 text-center">
          <div class="perfume-card rounded-3xl p-12 max-w-4xl mx-auto">
             <h3 class="text-3xl font-bold gold-text mb-6 text-black">Ready to Find Your Signature Scent?</h3>
             <p class="text-gray-900 text-lg mb-8">Explore our exclusive collection and discover fragrances that define your unique style</p>
             <a href="{{ route('Perfumes.show') }}" class="gold-gradient text-black font-bold py-4 px-8 rounded-full text-lg hover:scale-105 transition-transform duration-300 shadow-xl inline-block">
                Shop Collection
             </a>
          </div>
       </div>
    </div>

    

<div class="container mx-auto max-w-5xl flex gap-12 flex-wrap items-start justify-center md:justify-between py-12">
    <!-- Premium Quality -->
    <div class="grid gap-4 justify-items-center text-center md:flex-1">
        <div class="rounded-full border-8 border-amber-400 p-4 bg-amber-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                 stroke="#B45309" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
            </svg>
        </div>
        <h3 class="text-3xl font-bold font-serif text-amber-900">Premium Quality</h3>
        <p class="text-gray-600">Crafted with the finest ingredients for exceptional fragrance</p>
    </div>

    <!-- Long Lasting -->
    <div class="grid gap-4 justify-items-center text-center md:flex-1">
        <div class="rounded-full border-8 border-amber-400 p-4 bg-amber-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                 stroke="#B45309" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <h3 class="text-3xl font-bold font-serif text-amber-900">Long Lasting</h3>
        <p class="text-gray-600">Scents that stay with you throughout the day</p>
    </div>

    <!-- Cruelty Free -->
    <div class="grid gap-4 justify-items-center text-center md:flex-1">
        <div class="rounded-full border-8 border-amber-400 p-4 bg-amber-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                 stroke="#B45309" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
        </div>
        <h3 class="text-3xl font-bold font-serif text-amber-900">Cruelty Free</h3>
        <p class="text-gray-600">Ethically produced without animal testing</p>
    </div>
</div>




</section>




@endsection
