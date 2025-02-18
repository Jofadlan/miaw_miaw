<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miaw Miaw Hotel</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen flex flex-col">
        {{-- Navigasi --}}
        <header class="bg-white shadow">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">
                    Miaw Miaw Hotel
                </a>
                <nav>
                    @if (Route::has('login'))
                        <div class="space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </nav>
            </div>
        </header>

        {{-- Konten Utama --}}
        <main class="flex-grow container mx-auto px-6 py-12">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800">
                    Selamat Datang di Miaw Miaw Hotel
                </h1>
                <p class="mt-4 text-gray-600 text-lg">
                    Nikmati pengalaman menginap yang nyaman dan layanan terbaik kami.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2">
                {{-- Reservasi Kamar --}}
                <div class="p-8 bg-white shadow rounded-lg">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6-6 6" />
                        </svg>
                        <h2 class="ml-4 text-2xl font-bold text-gray-800">
                            Reservasi Kamar
                        </h2>
                    </div>
                    <p class="mt-4 text-gray-600">
                        Pesan kamar hotel dengan mudah dan cepat secara online. Temukan berbagai pilihan kamar yang sesuai dengan kebutuhan Anda.
                    </p>
                    <div class="mt-6">
                        <a href="#" class="inline-block px-6 py-2 bg-blue-500 text-white font-medium rounded hover:bg-blue-600 transition">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                {{-- Informasi Hotel --}}
                <div class="p-8 bg-white shadow rounded-lg">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 17a5 5 0 110-10 5 5 0 010 10z" />
                        </svg>
                        <h2 class="ml-4 text-2xl font-bold text-gray-800">
                            Informasi Hotel
                        </h2>
                    </div>
                    <p class="mt-4 text-gray-600">
                        Dapatkan informasi lengkap tentang fasilitas, layanan, dan promo menarik yang kami tawarkan. Kenali lebih jauh tentang Miaw Miaw Hotel.
                    </p>
                    <div class="mt-6">
                        <a href="#" class="inline-block px-6 py-2 bg-green-500 text-white font-medium rounded hover:bg-green-600 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </main>

        {{-- Footer --}}
        <footer class="bg-white shadow">
            <div class="container mx-auto px-6 py-4 text-center">
                <p class="text-gray-600 text-sm">
                    &copy; {{ date('Y') }} Miaw Miaw Hotel. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>
