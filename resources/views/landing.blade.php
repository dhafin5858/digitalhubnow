<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Pembuatan Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-gray-800 rounded-lg shadow-lg text-center">
        <h1 class="text-4xl font-bold mb-6 text-green-500">Jasa Pembuatan Website</h1>
        <p class="text-lg mb-8 text-gray-300">Dapatkan website profesional dengan harga terjangkau!</p>

        <!-- Login Form -->
        @if (!auth()->check())
            <form action="{{ route('login') }}" method="POST" class="mb-8">
                @csrf
                <input type="email" name="email" placeholder="Email" class="w-full p-3 mb-4 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-green-500" required>
                <input type="password" name="password" placeholder="Password" class="w-full p-3 mb-4 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-green-500" required>
                <button type="submit" class="w-full bg-green-500 text-white py-3 rounded hover:bg-green-600 transition duration-300">
                    Log In
                </button>
            </form>
            <a href="{{ route('register') }}" class="text-green-500 hover:underline">Don't have an account? Register here.</a>
        @else
            <p class="text-lg mb-8 text-gray-300">Welcome, {{ auth()->user()->name }}!</p>
            <form action="{{ route('logout') }}" method="POST" class="mb-8">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white py-3 rounded hover:bg-red-600 transition duration-300">
                    Log Out
                </button>
            </form>
            <!-- Buy Now Button (Visible Only When Logged In) -->
            <a href="https://app.midtrans.com/payment-links/1738549933819" target="_blank" class="w-full bg-green-500 text-white py-3 rounded-lg hover:bg-green-600 transition duration-300 block">
                Beli Sekarang (Rp 500.000)
            </a>
        @endif
    </div>
</body>
</html>
