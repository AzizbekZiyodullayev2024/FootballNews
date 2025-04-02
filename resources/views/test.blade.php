<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futbol Yangiliklari</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    
    <!-- Header -->
    <header class="bg-green-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Futbol Yangiliklari</h1>
            <input type="text" placeholder="Qidirish..." class="p-2 rounded text-black">
        </div>
    </header>
    
    <!-- Main Content -->
    <div class="container mx-auto flex mt-4">
        
        <!-- Sidebar -->
        <aside class="w-1/5 bg-white p-4 shadow-md rounded-lg">
            <h2 class="bg-green-900 text-yellow-300 font-bold px-3 py-2 rounded-md">Turnirlar</h2>
            <ul class="mt-2 space-y-1 text-green-800">
                <li><a href="/" class="hover:underline">Chempionlar Ligasi</a></li>
                <li><a href="/" class="hover:underline">Yevropa Ligasi</a></li>
                <li><a href="/" class="hover:underline">Millatlar Ligasi</a></li>
                <li><a href="/" class="hover:underline">Jahon Chempionati 2026</a></li>
            </ul>
        </aside>
        
        <!-- News Section -->
        <main class="w-3/5 mx-4">
            <div class="bg-white p-4 shadow-md rounded-lg">
                <h2 class="text-xl font-bold mb-4">Eng so'nggi yangiliklar</h2>
                
                <!-- News Item -->
                <div class="mb-4 p-3 border-b">
                    <h3 class="text-lg font-semibold text-green-800 hover:underline cursor-pointer">Futbol transfer bozori yangiliklari</h3>
                    <p class="text-sm text-gray-600">2025-03-27 | Manba: UEFA</p>
                    <p class="text-gray-700 mt-2">Yevropaning eng kuchli klublari o'z tarkibini mustahkamlash uchun yangi o'yinchilar bilan shartnoma imzolashmoqda...</p>
                </div>
                
                <!-- News Item -->
                <div class="mb-4 p-3 border-b">
                    <h3 class="text-lg font-semibold text-green-800 hover:underline cursor-pointer">Bugungi muhim o'yinlar</h3>
                    <p class="text-sm text-gray-600">2025-03-27 | Manba: FIFA</p>
                    <p class="text-gray-700 mt-2">Bugun Chempionlar Ligasi chorak final bosqichi o'yinlari bo'lib o'tadi...</p>
                </div>
            </div>
        </main>
        
        <!-- Right Sidebar -->
        <aside class="w-1/5 bg-white p-4 shadow-md rounded-lg">
            <h2 class="bg-green-900 text-yellow-300 font-bold px-3 py-2 rounded-md">Mashhur maqolalar</h2>
            <ul class="mt-2 space-y-1 text-green-800">
                <li><a href="#" class="hover:underline">Messi yoki Ronaldo?</a></li>
                <li><a href="#" class="hover:underline">Eng yaxshi hujumchilar</a></li>
                <li><a href="#" class="hover:underline">Kelasi mavsum favoritlari</a></li>
            </ul>
        </aside>
        
    </div>
    
    <!-- Footer -->
    <footer class="bg-green-800 text-white mt-10 p-4 text-center">
        © 2025 Futbol Yangiliklari. Barcha huquqlar himoyalangan.
    </footer>
    
</body>
</html>
