<?php
$page_title = "Admission & Visiting Information";
include($_SERVER["DOCUMENT_ROOT"] . "/inc/header.php"); ?>

<main class="min-h-screen">
    <!-- Хлебные крошки -->
    <nav class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <ol class="flex space-x-2">
                <li><a href="/" class="text-blue-600 hover:text-blue-800">Main page</a></li>
                <li class="text-gray-500">/</li>
                <li><a href="/en/visit/" class="text-blue-600 hover:text-blue-800">Visit</a></li>
                <li class="text-gray-500">/</li>
                <li class="text-gray-500"><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'The French Museum'; ?></li>
            </ol>
        </div>
    </nav>
    <!-- Main Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold mb-8 text-center">Admission & Visiting Information</h1>
            
            <!-- Opening Hours -->
            <div class="prose max-w-3xl mx-auto mb-12">
                <h2 class="text-2xl font-bold mb-4">Opening Hours</h2>
                <p class="text-lg text-gray-600 mb-4">
                    The gallery welcomes visitors throughout the week with varying schedules to accommodate different needs.
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>Monday: Closed</li>
                    <li>Tuesday - Friday: 10:00 AM – 6:00 PM</li>
                    <li>Saturday: 10:00 AM – 8:00 PM</li>
                    <li>Sunday: 10:00 AM – 5:00 PM</li>
                </ul>
                <p>
                    Last entry is 45 minutes before closing time. Special evening openings may be available for select exhibitions.
                </p>
            </div>

            <!-- Admission Information -->
            <div class="prose max-w-3xl mx-auto mb-12">
                <h2 class="text-2xl font-bold mb-4">Admission</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Entry is available for all visitors, with special access for certain groups. Complimentary admission applies to:
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>Children under 18</li>
                    <li>Students with valid ID</li>
                    <li>Visitors with disabilities and their companions</li>
                    <li>Art professionals with accreditation</li>
                </ul>
                <p>
                    Additional benefits are available for members and groups. Guided tours and audio guides can be booked in advance.
                </p>
            </div>

            <!-- Tickets -->
            <div class="prose max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold mb-4">Tickets & Booking</h2>
                <p class="text-lg text-gray-600 mb-4">
                    Tickets can be reserved online or purchased at the entrance. It is recommended to book in advance, especially during peak seasons.
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li>Standard admission available at the main entrance</li>
                    <li>Fast-track entry for pre-booked visitors</li>
                    <li>Group bookings require prior reservation</li>
                    <li>Special access passes for temporary exhibitions</li>
                </ul>
                <p>
                    Digital tickets can be scanned directly from mobile devices. Paper tickets are available upon request at the ticket office.
                </p>
            </div>
        </div>
    </section>

</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>