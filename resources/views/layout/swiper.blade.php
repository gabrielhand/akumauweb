<section id="hero"
    class="jsx-ae9b059f5cd4a9e h-[10rem] md:h-[25rem] bg-gradient-to-b pb-2 from-home-banner-gradFrom to-home-banner-gradTo px-8 lg:px-14 xl:px-34 2xl:px-36 flex justify-center items-center py-4 md:py-8">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/moba2.png"
                    alt="Image 1">
                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/1714540126skinslider_0105_rev.webp"
                    alt="Image 2">

            </div>
            <div class="swiper-slide">
                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/1714540126skinslider_0105_rev.webp"
                    alt="Image 2">
                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/moba2.png"
                    alt="Image 1">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <style>
        .mySwiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            position: absolute;
            border-radius: 8px;
            transition: transform 0.5s ease;
        }

        .swiper-slide img:nth-child(1) {
            z-index: 2;
            transform: rotate(0deg);
            width: 80%;
        }

        .swiper-slide:nth-child(odd) img:nth-child(2),
        .swiper-slide:nth-child(even) img:nth-child(2) {
            z-index: 1;
            transform: rotate(3deg);
            /* Gambar kedua slide ganjil berotasi ke kanan */
            top: 10px;
            width: 90%;
            /* Gambar kedua lebih besar */
            opacity: 0.7;
            /* Opacity diatur di sini */
        }

        .swiper-slide:nth-child(odd) img:nth-child(2) {
            left: 10%;
            /* Menggeser gambar kedua ke kanan */
        }

        .swiper-slide:nth-child(even) img:nth-child(2) {
            transform: rotate(-3deg);
            /* Gambar kedua slide genap berotasi ke kiri */
            top: 10px;
            width: 90%;
            /* Gambar kedua lebih besar */
        }
    </style>


    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</section>

<!-- Slider main container -->
{{-- <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div> --}}
