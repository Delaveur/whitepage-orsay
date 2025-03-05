<?php include 'inc/header.php'; ?>

<main class="min-h-screen">
    <!-- Главный герой с фоновым изображением -->
    <section class="relative h-[600px] flex items-center justify-center text-white overflow-hidden">
        <img 
            src="/images/museum-hero.png" 
            alt="Главный зал музея" 
            class="absolute inset-0 w-full h-full object-cover z-0"
            loading="lazy"
        >
        <div class="relative z-10 text-center bg-black/40 p-8 rounded-xl backdrop-blur-sm">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Добро пожаловать в Музей Искусств</h1>
            <p class="text-xl md:text-2xl mb-8">С 1925 года сохраняем историю для будущих поколений</p>
        </div>
    </section>

    <!-- Постоянные коллекции -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Постоянные коллекции</h2>
            
            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                <!-- Античное искусство -->
                <a href="pages/antiquity.php" class="group relative block h-96 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
                    <img 
                        src="/images/antiquity.jpg" 
                        alt="Античное искусство" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/60 to-black/90 p-8 flex flex-col justify-end">
                        <div class="border-l-4 border-white pl-4 transform group-hover:translate-x-2 transition-transform">
                            <h3 class="text-2xl font-bold text-white mb-2">Античное искусство</h3>
                            <p class="text-gray-200">V век до н.э. — IV век н.э.</p>
                        </div>
                    </div>
                    <div class="absolute top-6 right-6 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white">
                        120 экспонатов
                    </div>
                </a>

                <!-- Эпоха Возрождения -->
                <a href="pages/renaissance.php" class="group relative block h-96 rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500">
                    <img 
                        src="/images/renaissance.jpg" 
                        alt="Эпоха Возрождения" 
                        class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-black/60 to-black/90 p-8 flex flex-col justify-end">
                        <div class="border-l-4 border-white pl-4 transform group-hover:translate-x-2 transition-transform">
                            <h3 class="text-2xl font-bold text-white mb-2">Эпоха Возрождения</h3>
                            <p class="text-gray-200">XIV—XVI века</p>
                        </div>
                    </div>
                    <div class="absolute top-6 right-6 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-white">
                        85 экспонатов
                    </div>
                </a>
            </div>

            <!-- Дополнительные коллекции -->
            <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mt-8">
                <a href="pages/numismatics.php" class="group relative block h-64 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                    <img 
                        src="/images/coins.jpg" 
                        alt="Нумизматика" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-xl font-bold text-white text-center">Нумизматическая коллекция</h3>
                    </div>
                </a>

                <a href="pages/sculpture.php" class="group relative block h-64 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                    <img 
                        src="/images/sculpture.jpg" 
                        alt="Скульптура" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-xl font-bold text-white text-center">Мраморная скульптура</h3>
                    </div>
                </a>

                <a href="pages/archeology.php" class="group relative block h-64 rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                    <img 
                        src="/images/archeology.jpg" 
                        alt="Археология" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-xl font-bold text-white text-center">Археологические находки</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- История музея -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img 
                    src="/images/museum-history.png" 
                    alt="Историческое здание" 
                    class="rounded-xl shadow-xl"
                    loading="lazy"
                >
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Наша история</h2>
                <p class="text-gray-600 mb-4">Основанный в 1925 году, наш музей стал домом для более чем 50 000 уникальных экспонатов, охватывающих различные эпохи и культуры. Мы гордимся своей ролью в сохранении культурного наследия и предоставлении доступа к знаниям для всех поколений.</p>
                <a href="pages/history.php" class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
                    Узнать больше
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Галерея шедевров -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Жемчужины коллекции</h2>
            
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

    <!-- Модальное окно галереи -->
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
// Инициализация основного слайдера
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

// Управление модальным окном
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