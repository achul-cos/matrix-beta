<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix - Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-lime-500 px-4 py-3">
        <div class="container mx-auto flex items-center justify-between px-10">
            <!-- Hamburger dan Logo -->
            <div class="flex items-center space-x-4">
                <button class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <img src="logo.png" alt="Logo Matrix" class="h-8">
            </div>
            
            <!-- Search Bar -->
            <div class="flex-1 mx-9">
                <div class="relative">
                    <input type="text" class="w-full rounded-md py-2 px-4 focus:outline-none" placeholder="Search...">
                    <button class="absolute right-0 top-0 mt-2 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- User Profile dan Add Button -->
            <div class="flex items-center space-x-2">
                <span class="text-black">Nabila Maya</span>
                <div class="h-8 w-8 rounded-full bg-gray-800 flex items-center justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <button class="bg-white rounded-full h-8 w-8 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-6 max-w-3xl">
        <!-- Judul Pembayaran -->
        <div class="bg-lime-400 py-2 mb-4 text-center">
            <h2 class="font-bold text-lg">PEMBAYARAN</h2>
        </div>

        <!-- Ringkasan Pembayaran -->
        <div class="text-center mb-6">
            <h3 class="font-bold text-xl">RINGKASAN PEMBAYARAN</h3>
        </div>

        <!-- Detail Token dan Harga -->
        <div class="border-2 border-lime-400 rounded-lg p-4 mb-6">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="font-bold">JUMLAH TOKEN</h4>
                </div>
                <span class="font-bold">50 TOKEN</span>
            </div>
            <div class="flex justify-between items-center">
                <h4 class="font-bold">HARGA</h4>
                <span class="font-bold">RP. 50.000</span>
            </div>
        </div>

        <!-- E-Wallet Options -->
        <div class="border-2 border-lime-400 rounded-lg p-4 mb-6">
            <div class="flex flex-col space-y-4">
                <!-- DANA -->
                <div class="flex items-center">
                    <input type="radio" name="payment_method" id="dana" class="mr-2">
                    <div class="bg-blue-500 text-white h-6 w-6 flex items-center justify-center rounded">
                        <span class="text-xs font-bold">E</span>
                    </div>
                    <div class="ml-2">
                        <p class="font-bold">E-Wallet</p>
                        <ul class="text-sm list-disc ml-6">
                            <li>DANA</li>
                            <li>OVO</li>
                            <li>GoPay</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Transfer Bank -->
                <div class="flex items-center">
                    <input type="radio" name="payment_method" id="bank" class="mr-2">
                    <div class="bg-red-500 text-white h-6 w-6 flex items-center justify-center rounded">
                        <span class="text-xs font-bold">B</span>
                    </div>
                    <div class="ml-2">
                        <p class="font-bold">Transfer Bank</p>
                        <ul class="text-sm list-disc ml-6">
                            <li>BCA, BNI, Mandiri, dll.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- QRIS -->
                <div class="flex items-center">
                    <input type="radio" name="payment_method" id="qris" class="mr-2">
                    <div class="bg-green-500 text-white h-6 w-6 flex items-center justify-center rounded">
                        <span class="text-xs font-bold">Q</span>
                    </div>
                    <div class="ml-2">
                        <p class="font-bold">QRIS</p>
                        <ul class="text-sm list-disc ml-6">
                            <li>Virtual Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total dan Button -->
        <div class="flex justify-between mb-6">
            <div class="border border-black rounded px-6 py-2">
                <div class="flex justify-between">
                    <span class="font-bold">TOTAL</span>
                    <span class="font-bold">RP. 50.000</span>
                </div>
            </div>
            <button class="bg-white border border-black rounded px-8 py-2 font-bold text-center">
                LANJUTKAN PEMBAYARAN
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo dan Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <img src="logo.png" alt="Logo Matrix" class="h-8">
                        <span class="ml-2 font-bold text-xl">MATRIX</span>
                    </div>
                    <div class="flex space-x-2 mb-4">
                        <a href="#" class="text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                    <p class="text-sm text-gray-600">MATRIX, 2025</p>
                </div>

                <!-- Menu Links -->
                <div>
                    <h3 class="font-bold mb-4">Jelajahi Kami!</h3>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">Kontak</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">Bantuan</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-bold mb-4">Hubungi Kami</h3>
                    <div class="flex items-center mb-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+62 81234567</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Indonesia</span>
                    </div>
                </div>

                <!-- Partners -->
                <div>
                    <h3 class="font-bold mb-4">Mitra Kami</h3>
                    <ul class="text-sm space-y-1">
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">ASUS</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">ACER</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">LENOVO</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">NVDIA</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">AMD</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">INTEL</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-lime-500">POLARSTAR</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 py-3 text-center text-xs text-gray-500">
            ©2025 Matrix, All Rights Reserved
        </div>
    </footer>
</body>
</html>