<?php
$page_title = "Test page";
include '../inc/header.php'; ?>

<main class="min-h-screen">
    <!-- Хлебные крошки -->
    <nav class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <ol class="flex space-x-2">
                <li><a href="/" class="text-blue-600 hover:text-blue-800">Main page</a></li>
                <li class="text-gray-500">/</li>
                <li class="text-gray-500"><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'The French Museum'; ?></li>
            </ol>
        </div>
    </nav>
    <!-- Основной контент -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-8 text-center">Античное искусство</h1>
            
            <!-- Блок с текстом и изображением -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Текстовый блок (на мобильных будет вторым) -->
                <div class="prose max-w-none order-2 md:order-1">
                    <p class="text-lg text-gray-600 mb-6">
                        Коллекция античного искусства музея представляет собой уникальное собрание артефактов, 
                        охватывающее период с V века до н.э. по IV век н.э. Здесь вы найдете шедевры древнегреческой 
                        вазописи, римскую скульптуру и предметы быта эпохи эллинизма.
                    </p>
                    
                    <h2 class="text-2xl font-bold mb-4">Исторический контекст</h2>
                    <p class="mb-4">
                        Античное искусство оказало фундаментальное влияние на развитие всей европейской культуры. 
                        В нашей коллекции представлены:
                    </p>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Мраморные скульптуры богов Олимпа</li>
                        <li>Керамика с чернофигурной росписью</li>
                        <li>Ювелирные изделия эпохи эллинизма</li>
                        <li>Римские мозаики и фрески</li>
                    </ul>
                </div>

                <!-- Изображение (на мобильных будет первым) -->
                <div class="relative group h-fit order-1 md:order-2">
                    <img 
                        src="/images/athena.jpg" 
                        alt="Статуя Афины Паллады" 
                        class="rounded-xl shadow-lg w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <p class="text-white text-center text-sm">
                            Статуя Афины Паллады, V век до н.э.<br>
                            Мрамор, высота 230 см
                        </p>
                    </div>
                </div>
            </div>

            <!-- Текст на всю ширину -->
            <div class="prose max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold mb-4">Особенности коллекции</h2>
                <p class="mb-6">
                    Наша коллекция античного искусства начала формироваться в 1920-х годах благодаря археологическим 
                    экспедициям в Грецию и Италию. Особую ценность представляют предметы, сохранившие оригинальную 
                    полихромную окраску, что является большой редкостью для артефактов такого возраста.
                </p>

                <h3 class="text-xl font-bold mb-4 mt-8">Реставрационная работа</h3>
                <p class="mb-6">
                    Все экспонаты прошли тщательную реставрацию с использованием традиционных техник и современных 
                    технологий. Особое внимание уделялось сохранению аутентичности материалов при минимальном 
                    вмешательстве в оригинальную структуру объектов.
                </p>

                <div class="bg-blue-50 p-6 rounded-xl mt-8">
                    <h4 class="font-bold mb-2">Интересный факт:</h4>
                    <p class="text-gray-600 mb-0">
                        Статуя Афины Паллады была обнаружена в 1953 году во время строительных работ в Афинах. 
                        Она пролежала в земле более 2000 лет, сохранившись практически в идеальном состоянии.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../inc/footer.php'; ?>