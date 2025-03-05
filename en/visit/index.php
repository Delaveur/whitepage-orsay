<?php
$page_title = "Visiting Information";
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
            <h1 class="text-4xl font-bold mb-8 text-center">Visiting Information</h1>
            
            <!-- General Guidelines -->
            <div class="prose max-w-3xl mx-auto mb-12">
                <h2 class="text-2xl font-bold mb-4">Plan Your Visit</h2>
                <p class="text-lg text-gray-600 mb-4">
                    To ensure a smooth and enjoyable experience, we recommend checking the latest updates before your visit. 
                    The venue offers accessible entrances, visitor services, and various amenities for your convenience.
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>Free Wi-Fi available throughout the venue</li>
                    <li>Lockers and cloakroom for bags and coats</li>
                    <li>Guided tours and self-guided audio experiences</li>
                    <li>Family-friendly activities and educational programs</li>
                </ul>
                <p>
                    Photography is allowed in most areas, but the use of flash and tripods may be restricted. 
                    Food and beverages are available at designated cafés and restaurants.
                </p>
            </div>

            <!-- Opening Hours -->
            <div class="prose max-w-3xl mx-auto mb-12">
                <h2 class="text-2xl font-bold mb-4">Opening Hours</h2>
                <ul class="list-disc pl-6 mb-6">
                    <li>Monday: Closed</li>
                    <li>Tuesday - Friday: 10:00 AM – 6:00 PM</li>
                    <li>Saturday: 10:00 AM – 8:00 PM</li>
                    <li>Sunday: 10:00 AM – 5:00 PM</li>
                </ul>
                <p>
                    Last entry is 45 minutes before closing time. Extended hours may be available for select exhibitions and special events.
                </p>
            </div>

            <!-- Accessibility & Services -->
            <div class="prose max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold mb-4">Accessibility & Services</h2>
                <p class="text-lg text-gray-600 mb-4">
                    The venue is committed to providing an inclusive and welcoming experience for all visitors.
                    Various accessibility options are available:
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>Wheelchair-accessible entrances and elevators</li>
                    <li>Assistance services for visitors with disabilities</li>
                    <li>Seating areas and rest zones throughout the galleries</li>
                    <li>Audio guides and tactile experiences for visually impaired guests</li>
                </ul>
                <p>
                    If you require special assistance, staff members are available to help. Please inquire at the information desk upon arrival.
                </p>
            </div>
        </div>
    </section>


</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>