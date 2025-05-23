<nav class="sticky top-0 bg-white flex items-center justify-between p-1 lg:px-6" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-10 sm:h-16 md:h-18 lg:h-20 w-auto object-contain" src="{{ asset('storage/asset/logo-teks-samping.jpg') }}" alt="">
        </a>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm/6 font-semibold hover:text-blue-500 text-gray-900">Home</a>
        <a href="#" class="text-sm/6 font-semibold hover:text-blue-500 text-gray-900">About</a>
        <a href="#" class="text-sm/6 font-semibold hover:text-blue-500 text-gray-900">Contact</a>
        <a href="#" class="text-sm/6 font-semibold hover:text-blue-500 text-gray-900">Kandidat</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="{{route('login')}}" class="bg-blue-600 text-white px-3 py-2 rounded-lg hover:bg-blue-700 transition">Log in </a>
    </div>
</nav>
