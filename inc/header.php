<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информационный сайт</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            menuButton.addEventListener('click', function() {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuButton.querySelector('svg').classList.toggle('rotate-90');
            });
        });
    </script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <style>
        .swiper-slide {
            opacity: 0.5;
            transition: opacity 0.3s;
        }
        .swiper-slide-active {
            opacity: 1;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Навигация -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-bold text-blue-600">Логотип</a>
                
                <!-- Десктоп меню -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="hover:text-blue-600">Главная</a>
                    <a href="pages/about.php" class="hover:text-blue-600">О нас</a>
                    <a href="pages/contacts.php" class="hover:text-blue-600">Контакты</a>
                </div>

                <!-- Мобильная кнопка -->
                <button 
                    id="menu-button"
                    class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                    aria-label="Меню"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                >
                    <svg 
                        class="h-6 w-6 transition-transform" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Мобильное меню -->
        <div 
            id="mobile-menu" 
            class="md:hidden hidden absolute w-full bg-white shadow-lg py-2"
        >
            <a 
                href="/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                Главная
            </a>
            <a 
                href="pages/about.php" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                О нас
            </a>
            <a 
                href="pages/contacts.php" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                Контакты
            </a>
        </div>
    </nav>