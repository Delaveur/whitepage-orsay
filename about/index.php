<?php
$page_title = "History of The French Museum";
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
            <h1 class="text-4xl font-bold mb-8 text-center">Our History</h1>
            <!-- Image and Text Block -->
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Image (will be first on mobile) -->
                <div class="relative group h-fit order-1 md:order-1">
                    <img 
                        src="/images/museum-history.png" 
                        alt="History of The French Museum" 
                        class="rounded-xl shadow-lg w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center p-4">
                        <p class="text-white text-center text-sm">
                            The French Museum<br>
                            A legacy of art and culture
                        </p>
                    </div>
                </div>

                <!-- Text Block (will be second on mobile) -->
                <div class="prose max-w-none order-2 md:order-2">
                    <p class="text-lg text-gray-600 mb-6">
                        The French Museum has a rich history rooted in the preservation and celebration of art. 
                        Established in the early 20th century, it began as a vision to bring together the most significant works 
                        from the 19th and early 20th centuries. Over the years, it has grown into one of the most respected institutions 
                        in the world, dedicated to showcasing masterpieces that tell the story of art's evolution.
                    </p>
                    <h2 class="text-2xl font-bold mb-4">The Beginnings</h2>
                    <p class="mb-4">
                        From its humble origins, the museum has remained committed to offering visitors a place to experience the profound beauty 
                        of art while reflecting on the cultural and historical forces that shaped it. The museum’s collection began as a collection 
                        of paintings, sculptures, and artifacts, evolving over time to include more diverse works of art.
                    </p>
                </div>
            </div>

            <!-- Full-width Text -->
            <div class="prose max-w-none mx-auto mb-12">
                <h3 class="text-xl font-bold mb-4 mt-8">Growth and Expansion</h3>
                <p class="mb-6">
                    As the museum’s reputation grew, so did its collection. The French Museum expanded its space, acquired works from 
                    renowned artists, and attracted scholars and art lovers from across the globe. The institution became not only 
                    a place of exhibition but a center for research and education, where people could engage with the art in new and 
                    exciting ways.
                </p>

                <p class="mb-6">
                    Throughout the years, the museum has undergone several renovations, each time expanding its footprint and improving 
                    its ability to house an ever-growing collection. These renovations also allowed for the development of special 
                    exhibitions and public programs designed to engage visitors of all ages and backgrounds.
                </p>

                <p class="mb-6">
                    Today, The French Museum is not only an important cultural institution but also a dynamic space for art education, 
                    offering programs that foster a deep appreciation for art in all its forms. It continues to uphold its founding 
                    mission to collect, preserve, and showcase the masterpieces that have shaped the course of art history.
                </p>

                <p class="mb-6">
                    Looking ahead, The French Museum is dedicated to continuing its legacy of preservation while also embracing new 
                    technologies and ideas that will allow it to reach even broader audiences and keep art accessible to all.
                </p>

                <p class="mb-6">
                    The museum’s future is bright, as it remains committed to its mission of inspiring creativity, providing educational 
                    opportunities, and ensuring the art of the past continues to inform the art of the future.
                </p>
                <h2 class="text-2xl font-bold mb-4">A Legacy in Art and Culture</h2>
                <p class="mb-6">
                    The French Museum’s history is more than just about buildings and exhibitions; it is about the profound impact that art 
                    has on society. The museum stands as a testament to the power of art to reflect, challenge, and inspire humanity. 
                    For generations, The French Museum has been at the heart of art and culture, and it will continue to be a beacon for 
                    future generations.
                </p>

                <p class="mb-6">
                    From its early days to the present, The French Museum has evolved with the times while remaining true to its mission of 
                    celebrating and preserving art. It remains an enduring symbol of the importance of culture in our lives.
                </p>
        </div>
        </div>
    </section>

</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>