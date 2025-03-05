<?php
$page_title = "Terms of Conduct";
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
    <section id="terms-of-conduct" class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4 text-gray-800">Terms of Conduct</h2>
        <p class="mb-4 text-gray-700">Welcome to The French Museum. By accessing our facilities and services, you agree to abide by the following terms of conduct. Our goal is to create a respectful and enriching environment for all visitors.</p>
        <p class="mb-4 text-gray-700">Visitors are expected to behave in a manner that is respectful to others, museum staff, and exhibits. Disruptive behavior, including loud noise, running, or inappropriate conduct, is strictly prohibited. Food and drinks are not allowed in exhibition areas. Any damage to museum property may result in fines or legal action.</p>
        <p class="mb-4 text-gray-700">For the comfort of all guests, please turn off mobile phones or set them to silent mode while inside the exhibition halls. Visitors are encouraged to ask museum staff for assistance or information if needed. Those who fail to comply with these guidelines may be asked to leave without refund.</p>
        <ul class="mb-4 list-disc list-inside text-gray-700">
            <li>Maintain a respectful tone and behavior at all times.</li>
            <li>Follow instructions given by museum staff.</li>
            <li>Do not touch exhibits unless explicitly allowed.</li>
            <li>Supervise children to ensure their safety.</li>
            <li>Refrain from smoking, consuming alcohol, or using illegal substances.</li>
            <li>Large bags or backpacks may be subject to security checks.</li>
            <li>Pets are not allowed inside, except for service animals.</li>
        </ul>
        <p class="mb-4 text-gray-700">Failure to comply with these terms may result in removal from the premises. If you have any questions, please contact us at <a href="/contacts/" class="text-blue-600 hover:text-blue-800 underline">our contact page</a>.</p>
    </section>
    <section class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">General Terms</h2>
        <p>These general terms govern the use of our website. By accessing this site, you agree to the terms and conditions described below.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Use of the Site</h2>
        <p>The site is intended for personal and non-commercial use. You agree not to use the site for illegal or harmful activities.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Intellectual Property</h2>
        <p>All site content, including text, images, logos, and other elements, is protected by copyright. Any reproduction or distribution without prior authorization is prohibited.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Liabilities</h2>
        <p>We cannot be held responsible for direct or indirect damages resulting from the use of our website. You use the site at your own risk.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Modifications</h2>
        <p>We reserve the right to modify these general terms at any time. Changes will take effect as soon as they are published on the site.</p>
        <h2 class="text-2xl font-bold mt-6 mb-2">Contact</h2>
        <p>If you have any questions regarding these general terms, please contact us through our contact form.</p>
    </section>
</main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/inc/footer.php");  ?>