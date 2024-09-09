
<div id="loader" class="h-screen w-full bg-primary-black flex justify-center items-center z-[10000] absolute top-0">
    <div class="flex flex-col ">
        <img src="{{ asset('img/moka-white.png') }}" alt="Loading..." class="max-w-[5rem] mx-auto " />
        <h1 class="text-sm text-white">Welcome to the Moka App!</h1>
    </div>
</div>

<script>
     $('body').addClass('overflow-hidden');
    $(window).on('load', function() {

        setTimeout(function() {
            $('#loader').fadeOut();
            $('body').removeClass('overflow-hidden');
        }, 500);
    });
</script>