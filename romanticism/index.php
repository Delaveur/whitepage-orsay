<?php
$page_title = "Romanticism in Art";
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
            <h1 class="text-4xl font-bold mb-8 text-center">Romanticism in Art</h1>
            
            <!-- Image and Text Block -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Image (will be first on mobile) -->
                <div class="relative group h-fit order-1 md:order-1">
                    <img 
                        src="/images/paint-5.png" 
                        alt="Romanticism artwork" 
                        class="rounded-xl shadow-lg w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <p class="text-white text-center text-sm">
                            Romanticism Artwork<br>
                            Oil on canvas, 100 × 80 cm
                        </p>
                    </div>
                </div>

                <!-- Text Block (will be second on mobile) -->
                <div class="prose max-w-none order-2 md:order-2">
                    <p class="text-lg text-gray-600 mb-6">
                        Romanticism was a revolutionary movement that emerged in the late 18th century, challenging the rationalism and order of the Enlightenment. It celebrated the power of emotion, the beauty of nature, and the importance of individual expression, standing in contrast to the rigid conventions of classical art.
                    </p>
                    
                    <h2 class="text-2xl font-bold mb-4">Core Themes of Romanticism</h2>
                    <p class="mb-4">
                        Romanticism emphasized personal emotion, freedom, and the sublime in art. It rejected the constraints of classical forms and ideals, exploring instead the dramatic, the mysterious, and the supernatural. Key themes of Romanticism include:
                    </p>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Celebration of nature's beauty and power</li>
                        <li>Emphasis on individualism and emotional expression</li>
                        <li>Interest in the sublime and the supernatural</li>
                        <li>Exploration of exotic and historical subjects</li>
                    </ul>
                </div>
            </div>

            <!-- Full-width Text -->
            <div class="prose max-w-none mx-auto mb-12">
                <h2 class="text-2xl font-bold mb-4">Influence on Later Art Movements</h2>
                <p class="mb-6">
                    Romanticism had a profound effect on later art movements, particularly on Impressionism and Expressionism. Its emphasis on emotional intensity and the subjective experience influenced a generation of artists who sought to express their inner worlds through color, form, and light. The use of bold, dramatic brushstrokes and a focus on the emotional over the realistic paved the way for these movements.
                </p>

                <p class="mb-6">
                    One of the key aspects of Romanticism was the rejection of the strict rules of academic painting. Romantic artists believed that art should be a personal expression of emotion rather than a formal representation of reality. This break from tradition allowed for greater freedom and creativity, enabling the Romantic movement to produce some of the most emotionally charged and dynamic works in art history.
                </p>

                <p class="mb-6">
                    The Romantic movement also had a strong connection to literature, philosophy, and music. Writers like William Wordsworth and Lord Byron, as well as composers like Ludwig van Beethoven, were deeply influenced by Romantic ideals. They explored themes of nature, emotion, and individual experience, creating works that resonated with the artistic principles of the time.
                </p>

                <p class="mb-6">
                    One of the hallmarks of Romanticism was the exploration of the sublime—those moments of awe, terror, or beauty that transcend everyday life. Artists sought to capture the overwhelming power of nature, the mystery of the unknown, and the emotional extremes of the human condition. This focus on the sublime set Romanticism apart from earlier art movements, which were more focused on reason and order.
                </p>

                <p class="mb-6">
                    The Romantic artists also had a fascination with the exotic. Many artists looked beyond the borders of Europe to find inspiration, drawing on themes from distant lands, ancient history, and mythological tales. This interest in the exotic was part of a broader cultural movement that sought to explore new ideas, places, and experiences.
                </p>

                <p class="mb-6">
                    Nature was a central theme in Romanticism, with many artists focusing on the dramatic landscapes of mountains, storms, and wild terrain. For the Romantics, nature was both a source of inspiration and a mirror of the emotional state of the artist. The natural world was often depicted as a place of mystery and power, with elements of the supernatural intertwined.
                </p>

                <p class="mb-6">
                    The legacy of Romanticism is still felt in contemporary art. Modern artists continue to explore themes of emotion, individualism, and the sublime. Whether through abstract expressionism or digital art, the Romantic emphasis on personal experience and emotional intensity remains a driving force in artistic creation today.
                </p>

                <p class="mb-6">
                    Romanticism also had a profound impact on the development of modern literature. Authors such as Edgar Allan Poe and Emily Dickinson were influenced by Romantic ideas, using poetry and prose to explore the darker, more mysterious aspects of life. Their works, like the paintings of the Romantics, delved into the human psyche and the mysteries of existence.
                </p>

                <p class="mb-6">
                    The exploration of the self and the individual experience is one of the most lasting impacts of Romanticism. Romantic artists sought to express their personal visions of the world, whether through the dramatic use of color or the depiction of intense emotion. This emphasis on personal expression continues to be a cornerstone of modern art, as artists today explore their own experiences and interpretations of the world around them.
                </p>

                <p class="mb-6">
                    Romanticism's influence can be seen in the way contemporary artists approach themes such as nature, identity, and emotion. The movement’s focus on individual freedom, imagination, and emotional depth has shaped much of modern art, allowing artists to experiment with form and content in new and exciting ways.
                </p>
            </div>
        </div>
    </section>

</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>