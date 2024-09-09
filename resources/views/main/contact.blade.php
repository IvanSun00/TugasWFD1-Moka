@extends('layouts.main')

@section('styles')
<style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .accordion-content.open {
        max-height: 500px; 
    }

</style>

@endsection

@section('content')
    <div class="Hero section relative min-h-svh w-full flex justify-start pt-40 md:justify-center md:pt-48 ">
        <div class="overlay absolute inset-0 bg-black opacity-20 z-10 md:opacity-0"></div>
        <img src="{{ asset('img/contact-hero_1.jpg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white  ps-5 ">
        <h1 class="text-3xl md:text-4xl font-bold  text-left max-w-md md:max-w-lg mb-20">
            Halo! Apa yang bisa kami bantu?
        </h1>
        <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4 text-center">
            <div class="bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                WhatsApp Kami Sekarang!
            </div>
        </div>
        </div>
    </div>


    {{-- Pertanyaan tentang moka --}}
    <div class=" pt-10 pb-20 px-5 bg-primary-whiteGray">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-0 md:mx-auto md:w-[65vw] w-full  ">
            <div class="item1" data-aos="fade-up">
                <h1 class="text-xl lg:text-2xl font-bold mb-5 md:mb-10 text-center">Pertanyaan Tentang Moka</h1>
                
                {{-- accordion --}}
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1 ">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-dark border border-b-0 border-gray-200 rounded-t-xl gap-3 bg-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1" onclick="toggleAccordion('accordion-collapse-body-1')">
                            <span class="font-semibold hover:underline">Apa itu Moka</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="accordion-content" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
                            <p class="mb-2 text-sm text-dark dark:text-gray-400">Moka adalah bagian dari GoTo Financial yang menyediakan berbagai solusi untuk kebutuhan penjualan offline & online. Moka memiliki sistem POS yang sangat canggih sehingga dapat membantu penjualan offline serta memungkinkan Anda untuk mengatur penjualan online secara beriringan.</p>
                        </div>
                    </div>

                    <div id="accordion-collapse-2" class="accordion">
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-dark border border-b-0 border-gray-200  gap-3 bg-white" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2" onclick="toggleAccordion('accordion-collapse-body-2')">
                                <span class="font-semibold hover:underline">Apa itu Moka POS? </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="accordion-content" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
                                <p class="mb-2 text-sm text-dark dark:text-gray-400">
                                    Moka POS adalah sistem Point of Sale berbasis cloud yang dapat membantu aktivitas penjualan offline di toko anda. Kami menyediakan layanan dengan fitur yang lengkap yakni laporan transaksi harian, kegiatan promosi, pengaturan penyimpanan & persediaan barang, serta akses ke dashboard dan laporan secara real-time.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div id="accordion-collapse-3 py-2" class="accordion">
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-dark border border-b-0 border-gray-200  gap-3 bg-white" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3" onclick="toggleAccordion('accordion-collapse-body-3')">
                                <span class="font-semibold hover:underline text-left">Tipe bisnis seperti apa yang cocok menggunakan Moka POS?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="accordion-content" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
                                <p class="mb-2 text-sm text-dark dark:text-gray-400">Moka dapat digunakan oleh semua tipe dan skala bisnis, dari bisnis FnB, retail, penyedia jasa, bisnis yang baru dimulai, hingga bisnis yang telah memiliki ratusan cabang. Daftar sekarang dan coba moka POS gratis , tim kami akan sangat senang untuk menunjukkan bahwa fitur yang kami miliki dapat mengoptimalkan bisnis Anda..</p>
                            </div>
                        </div>
                    </div>

                  
                </div>
                
            </div>


            <div class="item2 mt-10 md:mt-0" data-aos="fade-up">
                <h1 class="text-xl lg:text-2xl font-bold text-center mb-5 md:mb-10">Pertanyaan Tentang Moka Order</h1>
                    {{-- accordion --}}
                    <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion2-collapse-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-dark border border-b-0 border-gray-200 rounded-t-xl gap-3 bg-white" data-accordion-target="#accordion2-collapse-body-1" aria-expanded="false" aria-controls="accordion2-collapse-body-1" onclick="toggleAccordion('accordion2-collapse-body-1')">
                            <span class="font-semibold hover:underline ">Apa itu Moka</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion2-collapse-body-1" class="accordion-content" aria-labelledby="accordion2-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
                            <p class="mb-2 text-sm text-dark dark:text-gray-400">Moka adalah bagian dari GoTo Financial yang menyediakan berbagai solusi untuk kebutuhan penjualan offline & online. Moka memiliki sistem POS yang sangat canggih sehingga dapat membantu penjualan offline serta memungkinkan Anda untuk mengatur penjualan online secara beriringan.</p>
                        </div>
                    </div>

                    <div id="accordion2-collapse-2" class="accordion">
                        <h2 id="accordion2-collapse-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-dark border border-b-0 border-gray-200  gap-3 bg-white" data-accordion-target="#accordion2-collapse-body-2" aria-expanded="false" aria-controls="accordion2-collapse-body-2" onclick="toggleAccordion('accordion2-collapse-body-2')">
                                <span class="font-semibold hover:underline">Apa itu Moka POS? </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion2-collapse-body-2" class="accordion-content" aria-labelledby="accordion2-collapse-heading-2">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
                                <p class="mb-2 text-sm text-dark dark:text-gray-400">
                                    Moka POS adalah sistem Point of Sale berbasis cloud yang dapat membantu aktivitas penjualan offline di toko anda. Kami menyediakan layanan dengan fitur yang lengkap yakni laporan transaksi harian, kegiatan promosi, pengaturan penyimpanan & persediaan barang, serta akses ke dashboard dan laporan secara real-time.
                                </p>
                            </div>
                        </div>
                    </div>


                    <div id="accordion2-collapse-3 py-2" class="accordion">
                        <h2 id="accordion2-collapse-heading-3">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-dark border border-b-0 border-gray-200  gap-3 bg-white" data-accordion-target="#accordion2-collapse-body-3" aria-expanded="false" aria-controls="accordion2-collapse-body-3" onclick="toggleAccordion('accordion2-collapse-body-3')">
                                <span class="font-semibold hover:underline text-left">Tipe bisnis seperti apa yang cocok menggunakan Moka POS?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion2-collapse-body-3" class="accordion-content" aria-labelledby="accordion2-collapse-heading-3">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 bg-white">
                                <p class="mb-2 text-sm text-dark dark:text-gray-400">Moka dapat digunakan oleh semua tipe dan skala bisnis, dari bisnis FnB, retail, penyedia jasa, bisnis yang baru dimulai, hingga bisnis yang telah memiliki ratusan cabang. Daftar sekarang dan coba moka POS gratis , tim kami akan sangat senang untuk menunjukkan bahwa fitur yang kami miliki dapat mengoptimalkan bisnis Anda..</p>
                            </div>
                        </div>
                    </div>                  
                    </div>
    
            </div>
        </div>
    
    </div>

    {{-- kami ada disini --}}
    <div class="Hero section relative min-h-svh w-full flex justify-start pt-24 md:justify-center md:pt-32 ">
        <div class="overlay absolute inset-0 bg-black opacity-20 z-10 md:opacity-0"></div>
        <img src="{{ asset('img/contact-hero_2.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white ps-5 ">
            <h1 class="text-3xl  font-bold  text-left max-w-sm md:max-w-md mb-5" data-aos="fade-right">
                Kami ada di sini jika Anda punya masalah menggunakan Moka 
            </h1>
            <p class="text-left text-md text-white break-words max-w-sm mb-16 " data-aos="fade-right">
                Kami berkomitmen melayani Anda dengan baik, termasuk menyelesaikan masalah Anda
            </p>
            <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4 text-center" data-aos="fade-right">
                <div class="cursor-pointer bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                    Pusat Bantuan
                </div>
            </div>
        </div>
    </div>
    

    {{-- moka dalam berita --}}
    <section class="min-h-svh px-5 flex items-center" data-aos="fade-up">
        <div class="mx-0 md:mx-auto md:w-[75vw] w-full">
            <h1 class="text-2xl md:text-3xl font-bold">Moka Dalam Berita</h1>

            {{-- card swiper --}}
            <div class="swiper-container overflow-hidden py-10 ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide max-w-sm">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ asset('img/moka_on_the_news_1.jpg') }}" alt="first" class="w-full h-60 object-cover">
                            <div class="p-5">
                                <h1 class="text-sm font-bold mb-2 max-w-xs">Digital Point-of-sale (POS) Startup Moka Strategy Shares Business Strategy, Data Trends to Aid SMEs in Facing Covid-19 Pandemic During Ramadan in Indonesia</h1>
                                <a href="#" class="text-sm text-primary-blue group">
                                    <span class="me-3 font-semibold">Pelajari</span>
                                    <i class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide max-w-sm">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ asset('img/moka_on_the_news_2.jpg') }}" alt="first" class="w-full h-60 object-cover">
                            <div class="p-5">
                                <h1 class="text-sm font-bold mb-2 max-w-xs">Digital Point-of-sale (POS) Startup Moka Strategy Shares Business Strategy, Data Trends to Aid SMEs in Facing Covid-19 Pandemic During Ramadan in Indonesia</h1>
                                <a href="#" class="text-sm text-primary-blue group">
                                    <span class="me-3 font-semibold">Pelajari</span>
                                    <i class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide max-w-sm">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ asset('img/moka_on_the_news_3.jpg') }}" alt="first" class="w-full h-60 object-cover">
                            <div class="p-5">
                                <h1 class="text-sm font-bold mb-2 max-w-xs">Digital Point-of-sale (POS) Startup Moka Strategy Shares Business Strategy, Data Trends to Aid SMEs in Facing Covid-19 Pandemic During Ramadan in Indonesia</h1>
                                <a href="#" class="text-sm text-primary-blue group">
                                    <span class="me-3 font-semibold">Pelajari</span>
                                    <i class="fa-solid fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
        </div>

    </section>

    {{--  kami mendukung  --}}
    <div class="Hero section relative min-h-svh w-full flex justify-start pt-24 md:justify-center md:pt-32 ">
        <div class="overlay absolute inset-0 bg-black opacity-20 z-10 md:opacity-0"></div>
        <img src="{{ asset('img/company-info-cta_1.jpeg') }}" alt="first" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="mx-0 md:mx-auto w-[75vw] z-20 text-white md:text-black ps-5 ">
        <h1 class="text-3xl  font-bold  text-left max-w-sm md:max-w-md mb-16" data-aos="fade-right">
            Kami mendukung para pemilik usaha, kekuatan baru ekonomi Indonesia
        </h1>
        <div class="flex flex-col sm:flex-row space-x-0 space-y-4 sm:space-y-0 sm:space-x-4 text-center" data-aos="fade-right"> 
            <div class="cursor-pointer bg-primary-blue text-white py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-[1.02] hover:bg-blue-600 hover:shadow-lg">
                Moka Learning Hub
            </div>
        </div>
        </div>
    </div>

    {{-- form contact --}}
    <div class=" pt-10 pb-20 px-5 bg-primary-whiteGray">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mx-0 md:mx-auto md:w-[50vw] w-full text-left">
            <div class="item1" data-aos="fade-right">
                <h1 class="text-xl md:text-2xl font-bold mb-10 ">Mau mengobrol langsung dengan tim kami?</h1>
                <p class="text-left text-sm mb-3 text-dark break-words">
                    Tanya di sini saja. Tim kami akan menjawab pertanyaan Anda paling lama 24 jam.
                </p>
                <p class="text-left text-sm  text-dark break-words">
                    Kami senang membantu Anda di jam-jam layanan berikut ini: 
                </p>
                <p class="text-left text-sm mb-3 text-dark break-words font-semibold">
                    Senin - Minggu <br>
                    9 Pagi - 9 Malam 
                </p>
                <p class="text-left text-sm mb-3 text-dark break-words">
                    Telepon kami atau tinggalkan pertanyaan di formulir. Kami akan merespons Anda dalam 1 hari kerja.
                </p>
                <p class="text-left text-sm mb-3 text-dark break-words">
                    <span class="font-bold">1500970</span> <br>
                    support@mokapos.com
                </p>
            </div>

            <div class="item2">
                <form action="#" method="post" class="space-y-4 text-sm" data-aos="fade-left">
                    <input type="text" name="nama" placeholder="Nama" class="w-full p-2 border shadow-sm rounded-md outline-sky-300" required>
                    <input type="email" name="email" placeholder="E-mail" class="w-full p-2 border shadow-sm rounded-md outline-sky-300" required>
                    <input type="tel" name="nomor_hp" placeholder="Nomor Hp" class="w-full p-2 border shadow-sm rounded-md outline-sky-300" required>
                    <select name="status" class="w-full p-2 border shadow-sm rounded-md" required>
                        <option value="" disabled selected>Status</option>
                        <option value="pelanggan">Pelanggan</option>
                        <option value="calon_pelanggan">Calon Pelanggan</option>
                    </select>
                    <textarea name="pertanyaan" placeholder="Pertanyaan" class="w-full p-2 border shadow-sm rounded-md outline-sky-300" rows="4" required></textarea>
                    
                    <button type="submit" class="w-full bg-primary-blue hover:bg-sky-500 text-white font-semibold py-3 rounded-md">Submit</button>
                </form>

            </div>
        </div>
    </div>
    
@endsection


@section('scripts')
<script>
    $(document).ready(function(){
        AOS.init();
        function toggleAccordion(id) {
            var content = document.getElementById(id);
            var isOpen = content.classList.contains('open');
            
            // Close all other accordions
            document.querySelectorAll('.accordion-content').forEach(el => {
                if (el.id !== id) {
                    el.style.maxHeight = null;
                    el.classList.remove('open');
                }
            });
            
            if (!isOpen) {
                content.classList.add('open');
                content.style.maxHeight = content.scrollHeight + "px";
            } else {
                content.classList.remove('open');
                content.style.maxHeight = null;
            }
        }

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    });
    
</script>

@endsection