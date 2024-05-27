<section id="hero"
    class="jsx-ae9b059f5cd4a9e h-[10rem] md:h-[25rem] bg-gradient-to-b pb-2 from-home-banner-gradFrom to-home-banner-gradTo px-8 lg:px-14 xl:px-34 2xl:px-36 flex justify-center items-center py-4 md:py-8">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/moba2.png');">
                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/moba2.png"
                    alt="Image 1" class="object-cover rounded-lg">
            </div>
            <div class="swiper-slide" style="background-image: url('https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/1714540126skinslider_0105_rev.webp');">
                <img src="https://sin1.contabostorage.com/b1d79b8bbee7475eab6c15cd3d13cd4d:mobafams/p/1714540126skinslider_0105_rev.webp"
                    alt="Image 2" class="object-cover rounded-lg">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <style>
        .swiper-slide {
            position: relative;
            background-size: cover;
            background-position: center;
            border-radius: 1rem;
        }
        .swiper-slide img {
            transform: rotate(-12deg);
            transition: transform 0.5s ease;
            position: relative;
            z-index: 1;
            border-radius: 1rem;
        }
        .swiper-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 0;
            filter: blur(10px) brightness(0.7);
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
