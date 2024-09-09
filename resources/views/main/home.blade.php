@extends('layouts.main')
@section('styles')
  <style>
    body {
      /* background: #eee; */
      margin: 0;
      padding: 0;
    }
    .swiper {
      height: 100svh;
      width: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @media (max-width: 768px) {
      .swiper-slide {
        justify-content: flex-start;
      }
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    /* swiper next prev */
    .custom-next,
    .custom-prev {
      position: absolute;
      z-index: 10;
      cursor: pointer;
      background-color: rgba(255, 255, 255, 1); /* Semi-transparent background */
      width: 65px;
      height: 65px;
      border-radius: 50%;
      color: blue;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 15px;
      top: 86%;
    }

    .custom-next:hover,
    .custom-prev:hover {
      background-color: rgba(255, 255, 255, 0.8); /* Darker background on hover */
    }

    .custom-next {
      right: 25px;
    }

    .custom-prev {
      left: 25px;
    }
    /* end swiper */
  </style>
@endsection

@section('content')


  <!-- Landing -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper ">
      {{-- swiper 1  --}}
      <div class="swiper-slide relative">
        <div class="overlay absolute inset-0 bg-black opacity-20 z-10 md:opacity-0"></div>
        <img src="{{ asset('img/home1.png') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white ps-5 ">
          <h1 class="text-4xl font-bold  text-left mb-20 ">
            Tampil Beda dengan <br> 
            Inovasi Baru
          </h1>
          <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="cursor-pointer bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
              Jadwalkan Demo
            </div>
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300 hover:scale-[1.02] hover:shadow-lg">
              WhatsApp Kami Sekarang!
            </button>
          </div>
        </div>
      </div>

      {{-- swiper 2 --}}
      <div class="swiper-slide relative">
        <div class="overlay absolute inset-0 bg-black opacity-30 z-10 md:opacity-0"></div>
        <img src="{{ asset('img/home2.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white ps-5 ">
          <div class="text md:max-w-md  mb-16 ">
            <h1 class="text-4xl lg:leading-tight font-bold  text-left  mb-6">
              Jualan Online. <br>
              Jualan Offline. <br>
              Jualan di Mana Saja
            </h1>
            <p class="text-left text-md text-white break-words max-w-sm ">
              Sistem aplikasi kasir online berbasis cloud yang dapat membawa potensi usaha Anda ke level tertinggi, baik online maupun offline.
            </p>
          </div>
          <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="cursor-pointer bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
              Jadwalkan Demo
            </div>
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300 hover:scale-[1.02] hover:shadow-lg">
              WhatsApp Kami 
            </button>
          </div>
        </div>
      </div>

      {{-- swiper 3 --}}
      <div class="swiper-slide relative">
        <img src="{{ asset('img/home3.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="overlay absolute inset-0 bg-black opacity-30 z-10 md:opacity-0"></div>
        <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white ps-5 ">
          <div class="text md:max-w-md  mb-16 ">
            <h1 class="text-4xl lg:leading-tight font-bold  text-left  mb-6">
              Semua informasi <br>
              tentang bisnis/toko <br>
              di tangan anda

            </h1>
            <p class="text-left text-md text-white break-words max-w-sm">
              Kami membantu Anda untuk mengembangkan bisnis di kanal online & offline langsung melalui tangan Anda sendiri
            </p>
          </div>
          <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4">
            <div class="cursor-pointer bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
              Jadwalkan Demo
            </div>
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300 hover:scale-[1.02] hover:shadow-lg">
              WhatsApp Kami 
            </button>
          </div>
        </div>
      </div>

      {{-- swiper 4 --}}
      <div class="swiper-slide relative">
        <img src="{{ asset('img/home4.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="overlay absolute inset-0 bg-black opacity-30 z-10 md:opacity-0"></div>
          <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white ps-5 ">
            <div class="text md:max-w-md  mb-16 ">
              <h1 class="text-4xl lg:leading-tight font-bold  text-left  mb-6">
                Kembangkan bisnis <br>
                anda bersama kami <br>

              </h1>
              <p class="text-left text-md text-white break-words max-w-sm">
                Kami membantu bisnis Anda mencapai potensi maksimalnya dari kanal online hingga offline.
              </p>
            </div>
            <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4">
              <div class="cursor-pointer bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                Jadwalkan Demo
              </div>
              <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300 hover:scale-[1.02] hover:shadow-lg">
                WhatsApp Kami 
              </button>   
            </div>
          </div>
      </div>

    </div>


    <div class="swiper-pagination pb-5"></div>
    <!-- Custom buttons -->
    <div class="custom-next">
      <i class="fa-solid fa-arrow-right"></i>
    </div>
    <div class="custom-prev">
      <i class="fa-solid fa-arrow-left"></i>

    </div>
  </div>

  {{-- section 1 --}}
  <section class="min-h-svh flex justify-center items-center my-10">
    <div class="max-w-customContainer mx-auto px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10">

        <!-- Kolom Kiri -->
        <div class="" data-aos="flip-left">
            <img alt="Moka POS" src="{{ asset('img/section1-thumbnail-video.png') }}" class="rounded-lg object-cover w-3/4 mx-auto md:mx-0 md:ms-auto" >
        </div>

        <!-- Kolom Kanan -->
        <div class="px-3 flex flex-col mt-10 md:mt-0" data-aos="fade-up">
          <div class="w-full mx-auto md:mx-0 md:me-auto bg-white max-w-md ">
            <h1 class="text-3xl font-bold text-black mb-3">Mulai dengan Moka</h1>
            <p class="text-md text-gray-700 mb-3"> 
                Merchant yang mengakses Back Office Moka secara rutin melihat kenaikan pendapatan sebesar 23% hanya dalam 6 bulan.
            </p>
            
            <div class="space-y-4">
                <div class=" flex items-center ">
                    <div class="w-8 h-8 bg-blue-600 text-white flex items-center justify-center rounded-full">
                        <!-- Icon 1 -->
                        <i class="fas fa-laptop"></i> <!-- Example icon -->
                    </div>
                    <span class="py-2 ml-4 text-black border-b-2 border-gray-200 border-opacity-50">Bisa jual online dan offline</span>
                </div>
                
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-purple-600 text-white flex items-center justify-center rounded-full">
                        <!-- Icon 2 -->
                        <i class="fas fa-chart-line"></i> <!-- Example icon -->
                    </div>
                    <span class="py-2 ml-4 text-black border-b-2 border-gray-200 border-opacity-50">Didesain untuk mengembangkan usaha Anda</span>
                </div>
                
                <div class="flex items-center">
                    <div class="w-8 h-8 bg-cyan-500 text-white flex items-center justify-center rounded-full">
                        <!-- Icon 3 -->
                        <i class="fas fa-handshake"></i> <!-- Example icon -->
                    </div>
                    <span class="py-2 ml-4 text-black border-b-2 border-gray-200 border-opacity-50">Tetap melayani yang terbaik setelah penjualan</span>
                </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>


  {{-- section 2 --}}
  <section class="min-h-svh flex justify-center items-center bg-primary-whiteGray py-10">
    <div class="max-w-customContainer mx-auto px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10">

        <!-- Kolom Kiri -->
        <div class="" data-aos="flip-left">
            <img alt="Moka POS" src="{{ asset('img/section2-image1.jpeg') }}" class="rounded-lg object-cover w-1/2 mx-auto md:mx-0 md:ms-auto" >
        </div>

        <!-- Kolom Kanan -->
        <div class="px-3 flex flex-col justify-center mt-10 md:mt-0" data-aos="fade-up">
          <div class="w-full mx-auto md:mx-0 md:me-auto  max-w-xs">
            <h3 class="text-sm font-bold mb-5">Moka Point of Sale</h3>
            <h1 class="text-3xl font-bold text-black mb-5">Kelola usaha offline Anda dengan Aplikasi Kasir Moka</h1>
            <p class="text-md text-gray-700 mb-5"> 
              Kami membantu Anda mendapatkan 
              data-data menarik dari transaksi 
              Anda sehingga Anda bisa menjual 
              lebih banyak lagi. 
            </p>
            <a href="#" class="text-sm text-primary-blue group" >
              <span class="me-3">Pelajari</span>
              <i class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
            </a>
          
          </div>
        </div>
        
      </div>
    </div>
  </section>
@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    AOS.init();

    var swiper = new Swiper(".mySwiper", {
      simulateTouch: false,
      loop: true,
      navigation: {
        nextEl: ".custom-next",
        prevEl: ".custom-prev",

      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  });
  });
  
</script>
@endsection
