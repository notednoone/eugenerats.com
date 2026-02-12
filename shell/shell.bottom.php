    </div>

    <footer>
        <p>Eugene Rat DIY Solutions © 2026 | DIY pest control information for Eugene residents</p>
        <p>This site provides educational information only. For severe infestations or health concerns, consult a professional.</p>
        <p><a href="privacy.html">Privacy Policy</a></p>
    </footer>

    <script>
        // FAQ Accordion functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', function() {
                    // Toggle active class on clicked item
                    item.classList.toggle('active');
                    
                    // Optional: Close other items when opening a new one
                    // Uncomment the lines below if you want only one FAQ open at a time
                    /*
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    */
                });
            });
        });
    </script>
</body>
</html>