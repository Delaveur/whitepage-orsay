<?php
$page_title = "Contact Us";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<main class="min-h-auto">
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
    <!-- Contact Form Section -->
    <section id="contact" class="container mx-auto p-4">
    <h2 class="text-3xl font-bold mb-4">Contact form</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Form -->
        <form action="contact.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="lastName" class="block mb-2">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="firstName" class="block mb-2">First Name</label>
                <input type="text" id="firstName" name="firstName" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-lg">
            </div>
            <div class="mb-4">
                <label for="message" class="block mb-2">Message</label>
                <textarea id="message" name="message" class="w-full p-2 border rounded-lg"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg">Send</button>
        </form>
        
        <!-- Contact Info and Map -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md flex flex-col gap-4">
            <div>
                <h3 class="text-xl font-semibold">Contact Information</h3>
                <p><strong>Email:</strong> consultation@ittechservices.com</p>
                <p><strong>Phone:</strong> +33987654321</p>
                <p><strong>Address:</strong> 12 Rue de la Liberté, 75015 Paris, France</p>
            </div>
            <iframe 
                src="https://www.google.com/maps?q=12+Rue+de+la+Liberté,+75015+Paris,+France&hl=en&output=embed" 
                class="w-full h-64 rounded-lg border-0" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>
</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>