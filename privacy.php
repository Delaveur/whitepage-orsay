<?php
$page_title = "Privacy Policy";
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
    <section id="privacy-policy" class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4 text-gray-800">Privacy Policy</h2>
        <p class="mb-4 text-gray-700">IT TECH SERVICES & CONSULTATION LTD values your privacy. This Privacy Policy outlines how we collect, use, and protect your personal data when you interact with The French Museum.</p>
        <p class="mb-4 text-gray-700">We collect personal information, such as names, email addresses, and phone numbers, only when voluntarily provided by users. This information is used solely for communication, customer service, and improving our services. We do not sell, trade, or share personal data with third parties except as required by law.</p>
        <p class="mb-4 text-gray-700">We may use cookies to enhance the user experience, analyze website traffic, and improve our services. Users can adjust their browser settings to decline cookies, though this may affect certain website functionalities. Personal data is stored securely and only accessible to authorized personnel.</p>
        <ul class="mb-4 list-disc list-inside text-gray-700">
            <li>Personal data is collected only when voluntarily provided.</li>
            <li>We implement strict security measures to protect data.</li>
            <li>Cookies are used to enhance user experience.</li>
            <li>Users have the right to request data modification or deletion.</li>
            <li>Third-party links are not covered by this privacy policy.</li>
            <li>We do not send promotional emails without user consent.</li>
            <li>Users can opt out of data collection at any time.</li>
        </ul>
        <p class="mb-4 text-gray-700">By using our services, you consent to this Privacy Policy. If you have any concerns, please reach out to us at consultation@ittechservices.com or visit <a href="/contacts/" class="text-blue-600 hover:text-blue-800 underline">our contact page</a>.</p>
    </section>
</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>