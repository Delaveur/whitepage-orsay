<footer class="bg-gray-800 text-white mt-20">
        <div class="container mx-auto px-4 py-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">About the Project</h4>
                    <p class="text-gray-400">This is an informational portal by IT TECH SERVICES & CONSULTATION LTD, dedicated to one of the most renowned art museums in France. Here, you will find insights, historical facts, and updates about its collections and exhibitions. Our goal is to provide an engaging and informative experience for all art enthusiasts.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Navigation</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-blue-400">Main</a></li>
                        <li><a href="/about/" class="hover:text-blue-400">About</a></li>
                        <li><a href="/contacts/" class="hover:text-blue-400">Contacts</a></li>
                        <li><a href="/privacy.php" class="hover:text-blue-400">Privacy policy</a></li>
                        <li><a href="/terms.php" class="hover:text-blue-400">Terms of conduct</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Contacts</h4>
                    <p class="text-gray-400">Email: consultation@ittechservices.com</p>
                    <p class="text-gray-400">Phone: +33987654321</p>
                    <p class="text-gray-400">Address: 12 Rue de la Liberté, 75015 Paris, France</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-400">
            &copy; <?php echo date("Y"); ?> IT TECH SERVICES & CONSULTATION LTD. All Rights Reserved.
            </div>
        </div>
    </footer>
        <!-- Cookies Notice -->
        <div id="cookie-notice" class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 text-center" style="display: none;">
        <p>We use cookies to enhance your experience. By continuing, you agree to our <a href="privacy.php" class="text-blue-400 underline">Privacy Policy</a>.</p>
        <button id="accept-cookies" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Accept</button>
    </div>
    <script>
        const cookieNotice = document.getElementById('cookie-notice');
        const acceptCookies = document.getElementById('accept-cookies');
        if (!localStorage.getItem('cookiesAccepted')) {
            cookieNotice.style.display = 'block';
        }
        acceptCookies.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieNotice.style.display = 'none';
        });
    </script>
</body>
</html>