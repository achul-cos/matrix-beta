<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Tailwind CSS</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-lime-500">
        <div class="container mx-auto px-20 py-4 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="logo.png" alt="Logo" class="h-8 w-8">
            </div>
            
            <!-- Menu Items -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-black hover:text-gray-700">Home</a>
                <a href="#" class="text-black hover:text-gray-700">Spesifikasi</a>
                <a href="#" class="text-black hover:text-gray-700">Rekomendasi</a>
                <a href="#" class="text-black hover:text-gray-700">Tentang</a>
            </div>
            
            <!-- Search Bar -->
            <div class="flex items-center  space-x-4">
                <div class="relative">
                    <input type="text" class="pl-8 pr-3 py-1 rounded-md bg-purple-100 text-black focus:outline-none" placeholder="Search...">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 absolute left-2 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    <button class="absolute right-0 top-0 mt-1 mr-2">
                    </button>
                </div>
            </div>
            
            <!-- User Profile and Add Button -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <span class="text-black">Nabila Maya</span>
                    <div class="h-8 w-8 rounded-full bg-gray-800 flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <button class="bg-white rounded-full h-8 w-8 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</body>
</html>