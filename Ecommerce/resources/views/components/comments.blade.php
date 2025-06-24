<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Fragrance Comments</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            100: '#faf3e0',
                            300: '#e6c88c',
                            500: '#d4af37',
                            700: '#b38b2d',
                        },
                        perfume: {
                            dark: '#1a1a1a',
                            light: '#f8f5f0',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-perfume-light">
    <!-- Fragrance Comments Section -->
    <div class="max-w-3xl mx-auto px-4 py-12">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-serif font-light text-perfume-dark mb-2">Fragrance Impressions</h2>
            <div class="w-20 h-px bg-gold-500 mx-auto"></div>
        </div>

        <!-- Comments Container -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gold-100">
            <!-- Comment Form -->
            <div class="p-6 border-b border-gold-100 bg-gold-50">
                <div class="flex items-start">
                    <div class="w-10 h-10 rounded-full bg-gold-100 overflow-hidden mr-4 flex-shrink-0 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <form  class="space-y-4" action="{{ route('StoreComment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="fragrance_id" value="{{ $produit->id }}">
                            <input 
                                name="comment"
                                type="text" 
                                placeholder="Share your fragrance experience..." 
                                class="w-full bg-transparent border-b border-gold-300 py-2 px-1 focus:outline-none focus:border-gold-500 transition-colors placeholder-gold-300 text-perfume-dark"
                            >
                            <div class="flex justify-end mt-3 space-x-3">
                                <button type="submit" class="px-4 py-2 bg-gold-500 text-white rounded-md hover:bg-gold-600 transition-colors font-medium">
                                    Post Impression
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Comments List -->
            <div class="divide-y divide-gold-100">
                <!-- Comment 1 -->
                @foreach ( $comments as $comment )
                    @if ($comment->product_id == $produit->id)
                        <div class="p-6 hover:bg-gold-50 transition-colors">
                    <div class="flex items-start">
                        <div class="w-10 h-10 rounded-full bg-gold-100 overflow-hidden mr-4 flex-shrink-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <span class="font-medium text-perfume-dark">{{ $comment->username }} </span>
                                <span class="text-gold-500 text-xs">{{ $comment->created_at }}</span>
                            </div>
                            <div class="flex items-center mt-1 mb-2">
                                
                                <span class="ml-2 text-xs text-gold-700">Purchased: {{ $produit->nom_de_parfum }} </span>
                            </div>
                            <p class="text-perfume-dark">{{ $comment->content }} </p>
                            
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                
            </div>
        </div>
    </div>
</body>
</html>