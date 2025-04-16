<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="flex flex-col p-4 space-y-4">
        <div class="mt-4 bg-white rounded-xl shadow-xl overflow-hidden transition-transform transform hover:scale-101">
            <div class="px-8 py-2 gap-4 grid grid-cols-12">
                <div class="col-span-2"><hr class="w-auto h-1.75 bg-lime-600 border-0 rounded-lg"></div>
                <div class="col-span-2"><hr class="w-auto h-1.75 bg-red-700 border-0 rounded-lg"></div>
                <div class="col-span-8"><hr class="w-auto h-1.75 bg-stone-700 border-0 rounded-lg"></div>
            </div>
            <div class="p-8 gap-4 grid grid-cols-2">
                <div class="justify-start pl-2 mr-2">
                    <h3 class="text-5xl font-bold">Halo, <span class="text-lime-600">Achul</span> </h3>
                    <p class="text-xl mt-4 text-gray-500">Hari ini sewa komputer apa ya?</p>
                </div>
                <div class="grid grid-flow-row grid-rows-2 auto-rows-max justify-end gap-4 pr-2 ml-2">
                    <div class="flex gap-8 justify-end">
                        <div class="w-1/5 h-1/5 min-h-1/3 min-w-1/3 transition-transform transform hover:scale-110"><a href="#"><img src="img/ui/tombol_intel.png" alt="" class="shadow-md rounded-lg"></a></div>
                        <div class="w-1/5 h-1/5 min-h-1/3 min-w-1/3 transition-transform transform hover:scale-110"><a href="#"><img src="img/ui/tombol_amd.png" alt="" class="shadow-md rounded-lg"></a></div>
                    </div>
                    <div class="flex gap-8 justify-end">
                        <div class="w-1/5 h-1/5 min-h-1/3 min-w-1/3 transition-transform transform hover:scale-110"><a href="#"><img src="img/ui/tombol_rtx.png" alt="" class="shadow-md rounded-lg"></a></div>
                        <div class="w-1/5 h-1/5 min-h-1/3 min-w-1/3 transition-transform transform hover:scale-110"><a href="#"><img src="img/ui/tombol_isi_token.png" alt="" class="shadow-md rounded-lg"></a></div>
                    </div>    
                </div>   
            </div>
        </div>
    </section>
</html>