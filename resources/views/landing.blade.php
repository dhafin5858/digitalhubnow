<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navbar -->
    <nav class="bg-gray-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-green-500 font-bold text-xl">DigitalHub</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    @if (auth()->check())
                        <p class="text-gray-300">Welcome, {{ auth()->user()->name }}</p>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300">Log Out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition duration-300">Log In</a>
                        <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Register</a>
                    @endif
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                @if (auth()->check())
                    <p class="text-gray-300">Welcome, {{ auth()->user()->name }}</p>
                    <form action="{{ route('logout') }}" method="POST" class="block">
                        @csrf
                        <button type="submit" class="block w-full bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300 text-left">Log Out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block text-gray-300 hover:text-white transition duration-300">Log In</a>
                    <a href="{{ route('register') }}" class="block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Register</a>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
<div class="container mx-auto px-8 py-16">
    <div class="grid md:grid-cols-2 gap-8 items-center">
        <!-- Left Text Section -->
         
        <div>
            <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500">  
     <h4 class="text-orange-600 font-semibold text-xl mb-2 mt-8"> </h4>
    <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
        Jasa Service PC/Laptop, Dan Voucher Internet <br /> mulai dari 3k! <span class="text-black"></span>
    </h1>
    
    <p class="text-gray-600 text-lg mt-6">
    <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Register</a>

    </p>
   
</div>
          
           
        </div>

        <!-- Right Image Section -->
        <div data-aos="fade-down-left" data-aos-duration="2000">
            <div class="relative">
                <img src="/images/image.png" alt="Creative Woman with Laptop" class="w-8/12 rounded-lg shadow-lg">
            </div>
        </div>

      
    </div>
</div>
<!-- Features Section -->
<section class="container mx-auto px-6 py-16">
    <div class="text-center mb-12">
        <div data-aos="fade-right">        <h2 class="text-3xl md:text-4xl font-bold text-whtie">benefit memilih jasa kami</h2>
        </div>
        <div data-aos="fade-left">
            <p class="text-gray-600 text-lg mt-2">kami adalah penyedia voucher Wi-Fi dengan harga terjangkau dan menyediakan jasa Service PC/laptop</p>

        </div>

    </div>
    <div class="grid md:grid-cols-3 gap-12 text-center">
        <!-- Feature 1 -->
        <div class="flex flex-col items-center space-y-4">
            <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center">
                <img src="/images/sla.png" alt="Uptime Icon" class="w-10 h-10">
            </div>
            <h3 class="text-xl font-semibold text-white">99.9% Uptime</h3>
            <p class="text-gray-600 text-md">
                Kami memastikan SLA diatas 99.99 uptime sehingga pengguna voucher internet akan merasa nyaman
            </p>
        </div>

        <!-- Feature 2 -->
        <div class="flex flex-col items-center space-y-4">
            <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center">
                <img src="/images/icn4 1.png" alt="Bandwidth Icon" class="w-10 h-10">
            </div>
            <h3 class="text-xl font-semibold text-white">Stable Bandwidth</h3>
            <p class="text-gray-600 text-md">
               Voucher Wi-Fi dengan bandwith yang stabil dan ping yang rendah
            </p>
        </div>

        <!-- Feature 3 -->
        <div class="flex flex-col items-center space-y-4">
            <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center">
                <img src="/images/Frame 2.png" alt="Support Icon" class="w-10 h-10">
            </div>
            <h3 class="text-xl font-semibold text-white">24×7 Friendly Support</h3>
            <p class="text-gray-600 text-md">
jika anda memiliki keluhan, customer service kami siap 24/7 membantu anda
            </p>
        </div>
    </div>
</section>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>