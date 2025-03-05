<?php
$page_title = "What's on";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

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
    <!-- Main Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-8 text-center">Masters of the 19th Century</h1>
            
            <!-- Text and Image Block -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Text Block (will be second on mobile) -->
                <div class="prose max-w-none order-2 md:order-1">
                    <p class="text-lg text-gray-600 mb-6">
                        This exhibition is dedicated to 19th-century artists who shaped a new vision of art, 
                        paving the way for modernism. Here you will find works by masters who redefined 
                        composition, color, and light.
                    </p>
                    
                    <h2 class="text-2xl font-bold mb-4">Impact of the Era</h2>
                    <p class="mb-4">
                        19th-century art reflected social changes and scientific progress. The collection includes:
                    </p>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Paintings in realism and romanticism styles</li>
                        <li>Impressionist works with unique brushstroke techniques</li>
                        <li>Sculptures conveying movement and emotion</li>
                        <li>Graphic works and sketches of famous masterpieces</li>
                    </ul>
                </div>

                <!-- Image (will be first on mobile) -->
                <div class="relative group h-fit order-1 md:order-2">
                    <img 
                        src="/images/paint-1.png" 
                        alt="19th-century painting" 
                        class="rounded-xl shadow-lg w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <p class="text-white text-center text-sm">
                            19th-century artwork<br>
                            Oil on canvas, 92 × 73 cm
                        </p>
                    </div>
                </div>
            </div>

            <!-- Full-width Text -->
            <div class="prose max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold mb-4">Collection Highlights</h2>
                <p class="mb-6">
                    The collection illustrates the most significant stylistic explorations of 19th-century artists. 
                    The exhibition spans from classical traditions to bold experiments with color and form, 
                    foreshadowing the artistic revolutions of the next century.
                </p>

                <h3 class="text-xl font-bold mb-4 mt-8">Preserving the Legacy</h3>
                <p class="mb-6">
                    Specialists carefully restore the artworks using both traditional techniques and advanced technologies. 
                    This ensures the preservation of original colors and material structures while minimizing interference.
                </p>

                <div class="bg-blue-50 p-6 rounded-xl mt-8">
                    <h4 class="font-bold mb-2">Did You Know?</h4>
                    <p class="text-gray-600 mb-0">
                        One of the featured paintings was long considered lost and was rediscovered in the 1970s 
                        in a private collection. After extensive restoration, it is now on display again.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>