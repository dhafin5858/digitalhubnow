<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navbar -->
    <nav class="bg-gray-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-white font-bold text-xl">DigitalHub!</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300">Log Out</button>
                    </form>
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
                <a href="{{ route('dashboard') }}" class="block text-gray-300 hover:text-white transition duration-300">Dashboard</a>
                <a href="https://app.midtrans.com/payment-links/1738549933819" target="_blank" class="block bg-white text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Beli Sekarang</a>
                <form action="{{ route('logout') }}" method="POST" class="block">
                    @csrf
                    <button type="submit" class="block w-full bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300 text-left">Log Out</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container mx-auto p-8 text-center">
        <h1 class="text-4xl font-bold mb-6 text-white">Hi  {{ $user->name }}</h1>
</div>

    <!-- Card Section -->
    <div class="container mx-auto p-8">
        <h2 class="text-3xl font-bold text-center text-white mb-8">Jasa Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- WiFi Voucher Card -->
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/Desain tanpa judul (2).png" alt="WiFi Voucher" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">WiFi Voucher</h3>
                    <p class="text-gray-300 pb-6">akses internet cepat di sekolah !</p>
                    <a href="https://app.midtrans.com/payment-links/1738549933819" target="_blank" class="w-full bg-blue-500 text-white rounded-lg hover:bg-blue-900 transition duration-300 block">
              (1 day= 3k )
        </a>
                </div>
            </div>

            <!-- Jasa Pembuatan Website Card -->
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/Website Builder (1).png" alt="Jasa Pembuatan Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Jasa Pembuatan Website</h3>
                    <p class="text-gray-300">Professional website development</p>
                </div>
                <a href="https://app.midtrans.com/payment-links/1738549933819" target="_blank" class="w-full bg-blue-500 text-white rounded-lg hover:bg-blue-900 transition duration-300 block">
              (1 day= 3k )
        </a>
            </div>

            <!-- Jasa Hosting Website Card -->
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <img src="/images/Website Builder (2).png" alt="Jasa Hosting Website" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Jasa Hosting Website</h3>
                    <p class="text-gray-300">Reliable hosting solutions to keep your website running smoothly.</p>
                    <a href="https://app.midtrans.com/payment-links/1738549933819" target="_blank" class="w-full bg-blue-500 text-white rounded-lg hover:bg-blue-900 transition duration-300 block">
              (1 day= 3k )
        </a>
                </div>
            </div>
            
        </div>
        
    </div>

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