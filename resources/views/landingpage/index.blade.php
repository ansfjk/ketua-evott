@extends('landingpage.partial.landing-layout')

@section('konten')
    <section class="text-gray-600 body-font pb-25 py-25 bg-gradient-to-l from-[#BFD9F2] to-white" id="hero-content">
        <div class="container mx-auto flex px-5 py-22 pb-20 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Voting Sekolah Jadi Lebih Seru
                    <br class="hidden lg:inline-block">Cepat, dan Online Bersama <span class="text-[#1B3F79]">Votely</span>
                </h1>
                <p class="mb-8 leading-relaxed">Gunakan Aplikasi vote kami untuk memberikan suara dalam pemilu dengan mudah
                    dan percaya diri. Suara Anda aman dan terlindungi.</p>
                <div class="flex justify-center">
                    <a href="{{route('login')}}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Get
                        Started</a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-3/6">
                <img class="object-cover object-center rounded" alt="hero"
                    src="{{ asset('storage/asset/hero-logo-1-.png') }}">
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="text-gray-600 body-font bg-gradient-to-tr from-[#BFD9F2] to-white">
        <div class="container mx-auto flex py-20 px-5 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h3 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Apa Itu <span
                        class="text-[#1B3F79]">Votely</span></h3>
                <p class="mb-8 leading-relaxed">Votely adalah aplikasi e-voting berbasis digital yang memungkinkan proses
                    pemungutan suara dilakukan secara online, aman, cepat, dan transparan. Aplikasi ini dirancang untuk
                    digunakan oleh berbagai organisasi seperti kampus, komunitas, perusahaan, hingga pemerintahan tingkat
                    lokal untuk menyelenggarakan pemilihan tanpa harus hadir secara fisik..</p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero"
                    src="{{ asset('storage/asset/hero-logo-1-.png') }}">
            </div>
        </div>
    </section>

    {{-- service --}}
    <section class="text-gray-600 py-20 body-font bg-white" id="service">
        <div class="container mx-auto">
            <h3 class="text-3xl font-bold text-center mb-5">Why Must This Votely</h3>
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center mb-2">Aman & Terenkripsi</h3>
                    <div class="text-blue-500 text-3xl mb-4">
                        🔒
                    </div>
                    <p class="text-gray-600 text-sm">Data pemilih dan hasil voting terlindungi dengan enkripsi tingkat
                        tinggi, menjaga keamanan dan privasi pengguna.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center mb-2">Real-time</h3>
                    <div class="text-blue-500 text-3xl mb-4">
                        📊
                    </div>
                    <p class="text-gray-600 text-sm">Hasil voting ditampilkan langsung secara real-time dengan akurasi
                        tinggi, mengurangi risiko manipulasi.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center mb-2">Mudah Digunakan di Semua Perangkat</h3>
                    <div class="text-blue-500 text-3xl mb-4">
                        💻
                    </div>
                    <p class="text-gray-600 text-sm">Akses mudah dari laptop, tablet, atau smartphone tanpa instalasi
                        aplikasi tambahan.</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center mb-2">Bisa Digunakan di Mana Saja</h3>
                    <div class="text-blue-500 text-3xl mb-4">
                        🌍
                    </div>
                    <p class="text-gray-600 text-sm">Akses voting dari rumah, kantor, atau bahkan luar negeri cukup dengan
                        internet saja.</p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center mb-2">Sistem Cerdas Anti-Kecurangan</h3>
                    <div class="text-blue-500 text-3xl mb-4">
                        🛡️
                    </div>
                    <p class="text-gray-600 text-sm">Voting hanya bisa dilakukan sekali per pemilih, dengan validasi
                        identitas otomatis.</p>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="font-bold text-center mb-2">Hasil Otomatis & Bisa Diekspor</h3>
                    <div class="text-blue-500 text-3xl mb-4">
                        📁
                    </div>
                    <p class="text-gray-600 text-sm">Data hasil voting bisa langsung diunduh dalam berbagai format (PDF,
                        Excel) untuk dokumentasi dan pelaporan.</p>
                </div>

            </div>
        </div>
    </section>
@endsection
