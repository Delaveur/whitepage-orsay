<?php include 'inc/header.php'; ?>

<main class="min-h-screen">
    <!-- Main block -->
    <section class="relative h-[600px] flex items-center justify-center text-white overflow-hidden">
        <img 
            src="/images/museum-hero.png" 
            alt="Welcome to The French Museum" 
            class="absolute inset-0 w-full h-full object-cover z-0"
            loading="lazy"
        >
        <div class="relative z-10 text-center bg-black/40 p-8 rounded-xl backdrop-blur-sm">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome to The French Museum</h1>
            <p class="text-xl md:text-2xl mb-8">Preserving art and culture for generations to come</p>
        </div>
    </section>

    <!-- Collections -->
    <section class="py-20 bg-gray-50">
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

    <!-- About -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img 
                    src="/images/museum-history.png" 
                    alt="Our History" 
                    class="rounded-xl shadow-xl"
                    loading="lazy"
                >
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Our History</h2>
                <p class="text-gray-600 mb-4">The French Museum has a rich history rooted in the preservation and celebration of art. 
                    Established in the early 20th century, it began as a vision to bring together the most significant works 
                    from the 19th and early 20th centuries. Over the years, it has grown into one of the most respected institutions 
                    in the world, dedicated to showcasing masterpieces that tell the story of art's evolution.</p>
                <a href="/about/" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                    About us ...
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery of Masterpieces -->
    <section class="py-20 bg-white">
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

<?php include 'inc/footer.php'; ?>