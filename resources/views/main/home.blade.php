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
        <img src="{{ asset('img/home1.png') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
          <div class="mx-auto w-[75vw] z-10 text-white ps-5 ">
            <h1 class="text-4xl font-bold  text-left mb-20 ">
              Tampil Beda dengan <br> 
              Inovasi Baru
            </h1>
            <div class="flex space-x-4">
              <div class="bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                Jadwalkan Demo
            </div>
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300">
              WhatsApp Kami Sekarang!
            </button>
          </div>
        </div>
      </div>

      {{-- swiper 2 --}}
      <div class="swiper-slide relative">
        <img src="{{ asset('img/home2.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
          <div class="mx-auto w-[75vw] z-10 text-white ps-5 ">
            <div class="text md:max-w-md  mb-16 ">
              <h1 class="text-4xl lg:leading-tight font-bold  text-left  mb-6">
                Jualan Online. <br>
                Jualan Offline. <br>
                Jualan di Mana Saja
              </h1>
              <p class="text-left text-md text-white break-words">
                Sistem aplikasi kasir online berbasis cloud yang dapat membawa potensi usaha Anda ke level tertinggi, baik online maupun offline.
              </p>
            </div>
            <div class="flex space-x-4">
              <div class="bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                Jadwalkan Demo
            </div>
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300">
              WhatsApp Kami 
            </button>
          </div>
        </div>
      </div>

      {{-- swiper 3 --}}
      <div class="swiper-slide relative">
        <img src="{{ asset('img/home3.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        
          <div class="mx-auto w-[75vw] z-10 text-white ps-5 ">
            <div class="text md:max-w-md  mb-16 ">
              <h1 class="text-4xl lg:leading-tight font-bold  text-left  mb-6">
                Semua informasi <br>
                tentang bisnis/toko <br>
                di tangan anda

              </h1>
              <p class="text-left text-md text-white break-words">
                Kami membantu Anda untuk mengembangkan bisnis di kanal online & offline langsung melalui tangan Anda sendiri
              </p>
            </div>
            <div class="flex space-x-4">
              <div class="bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                Jadwalkan Demo
            </div>
          
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300">
              WhatsApp Kami 
            </button>
          </div>
        </div>
      </div>

      {{-- swiper 3 --}}
      <div class="swiper-slide relative">
        <img src="{{ asset('img/home4.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        
          <div class="mx-auto w-[75vw] z-10 text-white ps-5 ">
            <div class="text md:max-w-md  mb-16 ">
              <h1 class="text-4xl lg:leading-tight font-bold  text-left  mb-6">
                Kembangkan bisnis <br>
                anda bersama kami <br>

              </h1>
              <p class="text-left text-md text-white break-words">
                Kami membantu bisnis Anda mencapai potensi maksimalnya dari kanal online hingga offline.
              </p>
            </div>
            <div class="flex space-x-4">
              <div class="bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                Jadwalkan Demo
            </div>
          
            <button class="border border-white text-white py-2 px-6 rounded-full hover:bg-white hover:text-gray-600 transition duration-300">
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
  <section class="min-h-svh my-70">
    <div class="max-w-customContainer mx-auto">
      <div class="bg-red-300 w-full">
        dasfdaf
      </div>
    </div>
  </section>


  {{-- section 2 --}}


  {{-- faq --}}



@endsection

@section('scripts')
<script>
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
</script>
@endsection
