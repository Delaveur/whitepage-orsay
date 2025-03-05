<?php
$page_title = "Masterpieces of the 19th Century";
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
    <!-- Main Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-8 text-center">Masterpieces of the 19th Century</h1>
            
            <!-- Text and Image Block -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Text Block (will be second on mobile) -->
                <div class="prose max-w-none order-2 md:order-1">
                    <p class="text-lg text-gray-600 mb-6">
                        This collection is dedicated to 19th-century artists who revolutionized the world of art, 
                        setting the stage for the modern movements that followed. Here, you'll find works by masters 
                        who redefined composition, color, and the use of light.
                    </p>
                    
                    <h2 class="text-2xl font-bold mb-4">Impact of the Era</h2>
                    <p class="mb-4">
                        The art of the 19th century mirrored significant social changes and scientific advancements. 
                        This collection includes:
                    </p>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Realist and romantic-style paintings</li>
                        <li>Impressionist works showcasing distinctive brushstroke techniques</li>
                        <li>Sculptures capturing movement and emotion</li>
                        <li>Graphic works and preliminary sketches of famous pieces</li>
                    </ul>
                </div>

                <!-- Image (will be first on mobile) -->
                <div class="relative group h-fit order-1 md:order-2">
                    <img 
                        src="/images/paint-3.png" 
                        alt="19th-century painting" 
                        class="rounded-xl shadow-lg w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <p class="text-white text-center text-sm">
                            19th-century artwork<br>
                            Oil on canvas
                        </p>
                    </div>
                </div>
            </div>

            <!-- Full-width Text -->
            <div class="prose max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold mb-4">Collection Highlights</h2>
                <p class="mb-6">
                    The collection showcases the most influential stylistic developments in 19th-century art. 
                    From classical traditions to daring experiments with color and form, this exhibition anticipates 
                    the artistic revolutions of the 20th century.
                </p>

                <h3 class="text-xl font-bold mb-4 mt-8">Preserving the Legacy</h3>
                <p class="mb-6">
                    Art conservationists employ both traditional restoration methods and modern technologies to 
                    preserve the integrity of these works. This careful approach ensures the longevity of original 
                    colors and materials, with minimal intervention.
                </p>

                <div class="bg-blue-50 p-6 rounded-xl mt-8">
                    <h4 class="font-bold mb-2">Did You Know?</h4>
                    <p class="text-gray-600 mb-0">
                        One of the featured paintings was long thought to be lost, but it was rediscovered in the 1970s 
                        in a private collection. After extensive restoration, it is now once again available for viewing.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>