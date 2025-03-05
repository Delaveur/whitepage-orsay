<?php
$page_title = "Impressionist Paintings";
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
            <h1 class="text-4xl font-bold mb-8 text-center">Impressionist Paintings</h1>
            
            <!-- Image and Text Block -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Image (will be first on mobile) -->
                <div class="relative group h-fit order-1 md:order-1">
                    <img 
                        src="/images/impressionist.png" 
                        alt="Impressionist painting" 
                        class="rounded-xl shadow-lg w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <p class="text-white text-center text-sm">
                            Impressionist Artwork<br>
                            Oil on canvas, 85 × 70 cm
                        </p>
                    </div>
                </div>

                <!-- Text Block (will be second on mobile) -->
                <div class="prose max-w-none order-2 md:order-2">
                    <p class="text-lg text-gray-600 mb-6">
                        Impressionism was a revolutionary art movement that emerged in France in the late 19th century. 
                        The movement sought to capture the fleeting moments of everyday life and the changing effects of 
                        light on the world around us. Impressionist artists rejected the formal, detailed style of academic 
                        painting, instead focusing on color, light, and brushstrokes to create a sense of immediacy.
                    </p>
                    
                    <h2 class="text-2xl font-bold mb-4">Key Characteristics of Impressionism</h2>
                    <p class="mb-4">
                        Impressionist paintings are often characterized by:
                    </p>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Use of light and color to depict atmosphere and movement</li>
                        <li>Short, loose brushstrokes that convey a sense of spontaneity</li>
                        <li>Focus on everyday scenes, landscapes, and outdoor settings</li>
                        <li>A rejection of precise detail in favor of capturing an impression or moment in time</li>
                    </ul>
                </div>
            </div>

            <!-- Full-width Text -->
            <div class="prose max-w-none mx-auto mb-12">
                <h2 class="text-2xl font-bold mb-4">Impact of Impressionism on Modern Art</h2>
                <p class="mb-6">
                    Impressionism marked a dramatic shift in the history of art. It rejected the academic traditions 
                    that had dominated European art for centuries, and instead emphasized capturing the beauty of 
                    ordinary life in a more subjective and expressive way. Its focus on light, color, and atmosphere 
                    paved the way for later movements like Post-Impressionism, Fauvism, and even Abstract Expressionism.
                </p>

                <p class="mb-6">
                    The movement had a profound impact not only on visual art but also on the way people viewed the world. 
                    Artists began to move away from idealized representations and instead depicted the world as it appeared 
                    to the human eye in its raw, unfiltered form. This allowed for a greater exploration of emotion and 
                    the subconscious in art.
                </p>

                <p class="mb-6">
                    One of the defining features of Impressionism was its emphasis on plein air painting—creating works outdoors 
                    in natural light, as opposed to in the studio. This allowed artists to directly engage with their environment 
                    and capture the ever-changing effects of light, weather, and seasons. Famous works like Claude Monet’s 
                    *Impression, Sunrise* exemplify this approach, where the play of light on water and the landscape were 
                    rendered with loose brushstrokes and vibrant colors.
                </p>

                <p class="mb-6">
                    Impressionism’s focus on light and color made it stand out from traditional art forms, which often relied 
                    on more subdued and controlled color palettes. By using bright, unblended colors and emphasizing contrasts 
                    between light and shadow, Impressionist artists were able to capture the essence of a moment in time, 
                    creating an emotional resonance that transcended realism.
                </p>

                <p class="mb-6">
                    The movement was initially met with criticism from both the public and critics, who found the loose brushwork 
                    and lack of detail to be unfinished. However, over time, the innovative approach of Impressionists 
                    was increasingly recognized for its artistic merit, and today the movement is celebrated as one of the most 
                    important and influential in art history.
                </p>

                <p class="mb-6">
                    One of the key figures in the movement, Claude Monet, is often considered the father of Impressionism. His 
                    series of paintings, such as *Water Lilies* and *Rouen Cathedral*, demonstrate his unique ability to capture 
                    the changing qualities of light and atmosphere at different times of day and in different weather conditions.
                </p>

                <p class="mb-6">
                    Other notable Impressionist artists include Edgar Degas, known for his depictions of ballet dancers and 
                    horse races, and Pierre-Auguste Renoir, famous for his portraits and scenes of everyday life. Each artist 
                    contributed to the development of Impressionism by emphasizing the use of color and the representation of 
                    fleeting moments.
                </p>

                <p class="mb-6">
                    Although Impressionism as a formal movement lasted only a few decades, its influence can be seen in a wide 
                    range of subsequent art movements. The Post-Impressionists, including Vincent van Gogh and Paul Cézanne, 
                    expanded upon the use of color and brushwork, pushing the boundaries of abstraction. The impact of Impressionism 
                    can even be felt in contemporary art, where many artists continue to explore its focus on light, color, and 
                    emotion.
                </p>

                <p class="mb-6">
                    Today, Impressionist paintings are among the most beloved and highly valued in the art world. Exhibitions 
                    dedicated to the movement draw large crowds, and works by Monet, Renoir, and Degas are displayed in major 
                    museums around the world. The enduring appeal of Impressionism lies in its ability to capture the beauty of 
                    the world in a way that feels immediate and deeply emotional, inviting viewers to experience the world 
                    as the artist saw it.
                </p>

                <p class="mb-6">
                    Impressionism not only changed the way we view art, but also the way we experience the world. By focusing 
                    on light, color, and the passage of time, Impressionist artists taught us to look more closely at the beauty 
                    and fleeting nature of our surroundings. It remains one of the most influential and beloved art movements 
                    of all time.
                </p>
            </div>
        </div>
    </section>

</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>