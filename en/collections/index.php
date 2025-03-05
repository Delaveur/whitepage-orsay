<?php
$page_title = "Collections";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<main class="min-h-screen">
    <!-- Breadcrumbs -->
    <nav class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <ol class="flex space-x-2">
                <li><a href="/" class="text-blue-600 hover:text-blue-800">Main page</a></li>
                <li class="text-gray-500">/</li>
                <li class="text-gray-500"><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'The French Museum'; ?></li>
            </ol>
        </div>
    </nav>
    <!-- Collections -->
    <section class="pt-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our collections</h2>

            <!-- First row collection-->
            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                <a href="/masterpiece/" class="group relative block h-96 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
                    <img 
                        src="/images/paint-3.png" 
                        alt="Masterpieces of the 19th Century" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/60 to-black/90 p-8 flex flex-col justify-end">
                        <div class="border-l-4 border-white pl-4 transform group-hover:translate-x-2 transition-transform">
                            <h3 class="text-2xl font-bold text-white mb-2">Masterpieces of the 19th Century</h3>
                            <p class="text-gray-200">This collection is dedicated to 19th-century artists</p>
                        </div>
                    </div>
                </a>

                <a href="/en/collections/" class="group relative block h-96 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
                    <img 
                        src="/images/paint-7.png" 
                        alt="Pearls of the collection" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/60 to-black/90 p-8 flex flex-col justify-end">
                        <div class="border-l-4 border-white pl-4 transform group-hover:translate-x-2 transition-transform">
                            <h3 class="text-2xl font-bold text-white mb-2">Pearls of the collection</h3>
                            <p class="text-gray-200">Discover the timeless masterpieces that define our collection</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Second row collection -->
            <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mt-8">
                <a href="/symbolism/" class="group relative block h-64 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                    <img 
                        src="/images/paint-4.png" 
                        alt="Symbolism and Its Influence" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-xl font-bold text-white text-center">Symbolism and Its Influence</h3>
                    </div>
                </a>

                <a href="/romanticism/" class="group relative block h-64 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                    <img 
                        src="/images/paint-5.png" 
                        alt="Romanticism in Art" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-xl font-bold text-white text-center">Romanticism in Art</h3>
                    </div>
                </a>

                <a href="/impressionist/" class="group relative block h-64 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                    <img 
                        src="/images/impressionist.png" 
                        alt="Impressionist Paintings" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-xl font-bold text-white text-center">Impressionist Paintings</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Gallery of Masterpieces -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Pearls of the collection</h2>
            
            <div class="swiper gallery-main relative">
                <div class="swiper-wrapper">
                    <?php for($i=1; $i<=8; $i++): ?>
                    <div class="swiper-slide aspect-video cursor-pointer group">
                        <img 
                            src="/images/paint-<?= $i ?>.png" 
                            alt="Masterpiece <?= $i ?>" 
                            class="w-full h-full object-cover rounded-xl shadow-lg"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="text-white text-lg">Masterpiece <?= $i ?></span>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                
                <div class="swiper-button-next !text-white !w-12 !h-12 bg-black/30 rounded-full backdrop-blur-sm"></div>
                <div class="swiper-button-prev !text-white !w-12 !h-12 bg-black/30 rounded-full backdrop-blur-sm"></div>
            </div>

            <div class="swiper gallery-thumbs mt-4">
                <div class="swiper-wrapper">
                    <?php for($i=1; $i<=8; $i++): ?>
                    <div class="swiper-slide aspect-square cursor-pointer opacity-50 transition-opacity">
                        <img 
                            src="/images/paint-<?= $i ?>.png" 
                            alt="Miniature <?= $i ?>" 
                            class="w-full h-full object-cover rounded-lg"
                            loading="lazy"
                        >
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal window -->
    <div id="gallery-modal" class="fixed inset-0 z-50 hidden bg-black/90 backdrop-blur-md">
        <div class="absolute top-4 right-4 z-10">
            <button class="text-white text-4xl hover:text-gray-300 transition-colors" onclick="closeModal()">&times;</button>
        </div>
        
        <div class="swiper gallery-modal h-full w-full">
            <div class="swiper-wrapper">
                <?php for($i=1; $i<=8; $i++): ?>
                <div class="swiper-slide flex items-center justify-center p-8">
                    <img 
                        src="/images/paint-<?= $i ?>.png" 
                        alt="Masterpiece <?= $i ?>" 
                        class="max-h-full max-w-full object-contain rounded-lg"
                        loading="lazy"
                    >
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

</main>
<script>

const mainSlider = new Swiper('.gallery-main', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: new Swiper('.gallery-thumbs', {
            slidesPerView: 4,
            spaceBetween: 10,
            breakpoints: {
                640: { slidesPerView: 5 },
                1024: { slidesPerView: 6 }
            }
        })
    }
});


document.querySelectorAll('.gallery-main .swiper-slide').forEach(slide => {
    slide.addEventListener('click', () => {
        document.getElementById('gallery-modal').classList.remove('hidden');
        initModalSlider(mainSlider.realIndex);
    });
});

function initModalSlider(startIndex) {
    const modalSlider = new Swiper('.gallery-modal', {
        initialSlide: startIndex,
        slidesPerView: 1,
        loop: true,
        keyboard: { enabled: true },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

function closeModal() {
    document.getElementById('gallery-modal').classList.add('hidden');
    document.querySelector('.gallery-modal').swiper.destroy();
}
</script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>