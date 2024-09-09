@extends('layouts.main')
@section('styles')

@endsection

@section('content')
    <div class="hero-section min-h-svh ">
        {{-- banner --}}
        <div class="banner h-[90svh] relative">
            <!-- Gambar background -->
            <img src="{{ asset('img/Banner_Pricing.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover z-[-1]" />
        
            <!-- Konten -->
            <div class="z-10 h-full flex justify-center items-center text-white text-center flex-col space-y-4 px-3">
                <h1 class="text-4xl md:text-5xl font-bold">Harga Aplikasi Kasir Moka POS</h1>
                <p class="max-w-md text-lg md:text-xl">Dapatkan penawaran terbaik untuk semua kebutuhan bisnis Anda. Tanpa biaya tersembunyi.</p>
            </div>
        </div>

        {{-- price card --}}
        <div class="flex  justify-center mb-5 mt-10 md:-mt-[25vh] px-5">
            <div class="flex gap-6 flex-col md:flex-row">
                <!-- Basic Card -->
                <div class="bg-blue-50 text-white rounded-lg  w-full max-w-md mx-auto md:w-64 md:mx-0   shadow-lg" data-aos="fade-up">
                    <div class="card_header text-center py-10 relative h-[25vh] bg-primary-blue rounded-t-lg">
                        <h2 class="text-2xl font-bold">Basic</h2>
                        <h3 class="text-3xl font-bold mb-1">Rp299.000</h3>
                        <p class="text-md mb-2">Per outlet/bulan</p>
                    </div>
                    <div class="card_content bg-blue-50 text-gray-800 p-6 rounded-b-md text-center ">
                        <p class="text-md font-bold mb-6">Paket yang mendukung operasi dasar usaha
                        </p>
                        <div class=" cursor-pointer bg-primary-blue hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded-full">
                            Jadwalkan Demo
                        </div>
                    </div>
                </div>
        
                <!-- Pro Card  -->
                <div class="bg-blue-50 text-white rounded-lg w-full max-w-md mx-auto md:w-64 md:mx-0 shadow-lg" data-aos="fade-up">
                    <div class="card_header text-center py-10 relative h-[25vh] bg-primary-darkBlue rounded-t-lg">
                        <span class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-green-500 text-xs px-5 py-2 rounded-b-md">Populer</span>
                        <h2 class="text-2xl font-bold">Pro</h2>
                        <h3 class="text-3xl font-bold mb-1">Rp499.000</h3>
                        <p class="text-md mb-2">Per outlet/bulan</p>
                    </div>
                    <div class="card_content bg-blue-50 text-gray-800 p-6 rounded-b-md text-center">
                        <p class="text-md font-bold mb-6">Paket dengan fitur lengkap yang mendukung efisiensi usaha Anda</p>
                        <div class="cursor-pointer bg-primary-darkBlue hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">
                            Jadwalkan Demo
                        </div>
                    </div>
                </div>
        
                <!-- Enterprise Card -->
                <div class="bg-blue-50 text-white rounded-lg w-full max-w-md mx-auto md:w-64 md:mx-0 shadow-lg" data-aos="fade-up">
                    <div class="card_header text-center py-10 relative h-[25vh] bg-primary-blue rounded-t-lg">
                        <h2 class="text-2xl font-bold">Enterprise</h2>
                        <h3 class="text-3xl font-bold mb-1">Rp799.000</h3>
                        <p class="text-md mb-2">Per outlet/bulan</p>
                    </div>
                    <div class="card_content bg-blue-50 text-gray-800 p-6 rounded-b-md text-center">
                        <p class="text-md font-bold mb-6">Paket terlengkap yang mendukung usaha Anda ke level yang lebih tinggi
                        </p>
                        <div class="cursor-pointer bg-primary-blue hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded-full">
                        Jadwalkan Demo
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- table pricing --}}
    <div class="flex flex-col items-center my-20 px-5">
        <div class="headlilne">
            <h2 class="text-2xl md:text-4xl font-bold text-center">Lihat Perbandingan Fitur</h2>
        </div>

        <div class="content max-w-lg mx-auto md:mx-0 md:max-w-[70vw]">
            <section class="text-gray-700 body-font overflow-hidden">
                <div class="container px-5 py-12 md:py-24 mx-auto flex flex-wrap" data-aos="fade-up">
                    <div class="lg:w-1/4 mt-48 hidden lg:block ">
                        <div class="mt-px border-t border-gray-300 border-b border-l rounded-tl-lg rounded-bl-lg overflow-hidden">
                            <p class="bg-gray-100 text-gray-900 h-32 text-left px-4 flex items-center justify-start -mt-px">Aplikasi Kasir Digital, Dashboard Laporan Real-Time, Manajemen Stok, Manajemen Promo, dan masih banyak lagi</p>
                            <p class="text-gray-900 h-12 text-left px-4 flex items-center justify-start">Pembayaran Digital Melalui e-Wallet QRIS</p>
                            <p class="bg-gray-100 text-gray-900 h-12 text-left px-4 flex items-center justify-start">Pengiriman Struk via Email</p>
                            <p class="text-gray-900 h-12 text-left px-4 flex items-center justify-start">Pengiriman Struk via SMS</p>
                            <p class="bg-gray-100 text-gray-900 h-12 text-left px-4 flex items-center justify-start">Penyimpanan Database Pelanggan</p>
                            <p class="text-gray-900 h-12 text-left px-4 flex items-center justify-start">Manajemen Loyalitas Pelanggan</p>
                            <p class="bg-gray-100 text-gray-900 h-12 text-left px-4 flex items-center justify-start">Edukasi & Training Online</p>
                            <p class="text-gray-900 h-12 text-left px-4 flex items-center justify-start">Setup & Training Tatap Muka</p>
                            <p class="bg-gray-100 text-gray-900 h-12 text-left px-4 flex items-center justify-start">Live Chat & WhatsApp Support</p>
                        </div>
                    </div>
                    <div class="flex lg:w-3/4 w-full flex-wrap lg:border border-gray-300 rounded-lg">
                        {{-- basic --}}
                    <div class="lg:w-1/3 lg:mt-px w-full mb-10 lg:mb-0 border-2 border-gray-300 lg:border-none rounded-lg lg:rounded-none" data-aos="fade-up">
                        <div class="px-2 text-center h-48 flex flex-col items-center justify-center" >
                            <h2 class="text-3xl text-gray-900 font-medium leading-none mb-4 mt-2 text-left">Basic</h2>
                            <h2 class="text-4xl text-gray-900 font-medium leading-none mb-4 mt-2">Rp299.000</h2>
                            <span class="text-sm text-gray-600">Per outlet/bulan</span>
                        </div>
                        <p class="bg-gray-100 text-gray-600 h-32 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="h-12 text-gray-600 px-6 text-center leading-relaxed flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 6L6 18M6 6l12 12"></path>
                            </svg>                            
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 6L6 18M6 6l12 12"></path>
                            </svg>                            
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 6L6 18M6 6l12 12"></path>
                            </svg>                            
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 6L6 18M6 6l12 12"></path>
                            </svg>                            
                        </p>
                        <div class="border-t border-gray-300 p-6 text-center rounded-bl-lg">
                            <button class="flex items-center mt-auto text-white bg-primary-blue border-0 py-2 px-4 w-full focus:outline-none hover:bg-blue-500 rounded font-semibold cursor-pointer">Jadwalkan Demo
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                            <p class="text-xs text-gray-500 mt-3">Moka: Transformasi Digital untuk Bisnis Kuliner Anda</p>
                        </div>
                    </div>

                    {{-- section pro --}}
                    <div class="lg:w-1/3 lg:-mt-px w-full mb-10 lg:mb-0 border-2 rounded-lg border-primary-darkBlue relative" data-aos="fade-up">
                        <span class="bg-primary-darkBlue text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">Populer</span>
                        <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
                            <h2 class="text-3xl text-gray-900 font-medium leading-none mb-4 mt-2 text-left">Pro</h2>
                            <h2 class="text-4xl text-gray-900 font-medium leading-none mb-4 mt-2">Rp499.000</h2>
                            <span class="text-sm text-gray-600">Per outlet/bulan</span>
                        </div>
                        <p class="bg-gray-100 text-gray-600 h-32 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="h-12 text-gray-600 text-center leading-relaxed flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 6L6 18M6 6l12 12"></path>
                            </svg>
                            
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 6L6 18M6 6l12 12"></path>
                            </svg>                            
                        </p>
                        <div class="p-6 text-center border-t border-gray-300">
                            <button class="flex items-center mt-auto text-white bg-primary-darkBlue border-0 py-2 px-4 w-full focus:outline-none hover:bg-blue-700 rounded font-semibold cursor-pointer">Jadwalkan Demo
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                            <p class="text-xs text-gray-500 mt-3">Moka: Transformasi Digital untuk Bisnis Kuliner Anda</p>
                        </div>
                    </div>

                    {{-- enterprise --}}
                    <div class="lg:w-1/3 w-full lg:mt-px border-2 border-gray-300 lg:border-none rounded-lg lg:rounded-none" data-aos="fade-up">
                        <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
                            <h2 class="text-3xl text-gray-900 font-medium leading-none mb-4 mt-2 text-left">Enterprise</h2>
                            <h2 class="text-4xl text-gray-900 font-medium leading-none mb-4 mt-2">Rp799.000</h2>
                            <span class="text-sm text-gray-600">Per outlet/bulan</span>
                        </div>
                        <p class="bg-gray-100 text-gray-600 h-32 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="h-12 text-gray-600 text-center leading-relaxed flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <p class="bg-gray-100 text-gray-600 text-center h-12 flex items-center justify-center">
                            <span class="w-5 h-5 inline-flex items-center justify-center bg-green-500 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                        </p>
                        <div class="p-6 text-center border-t border-gray-300">
                        <button class="flex items-center mt-auto text-white bg-primary-blue border-0 py-2 px-4 w-full focus:outline-none hover:bg-blue-500 rounded font-semibold cursor-pointer">Jadwalkan Demo
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Moka: Transformasi Digital untuk Bisnis Kuliner Anda</p>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
        
        




@endsection

@section('scripts')
<script>
    AOS.init();
</script>
@endsection