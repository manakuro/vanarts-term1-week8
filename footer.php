<?php 
    use FS\Utility;
?>
    <footer class="page-footer sec">
        
        <div class="row">

            <div class="span-12 columns page-footer-divider"></div>
            
            <div class="page-footer-inner cf">
                
                <div class="columns span-l-6">
                    <ul class="nav-list"><?php echo $navHTML; ?></ul>
                </div>

                <div class="columns span-l-4 offset-l-2">
                                        
                    <div class="newsletter-form">
                        
                        <input type="text" name="email" id="email" class="input newsletter-input" placeholder="NEWSLETTER">
                        <button class="btn newsletter-btn">submit</button>

                    </div>

                    <ul class="social">
                        <?php echo $socialHTML; ?>
                    </ul>

                </div>

            </div>

            <p class="copyright">Free Spirit © 2015 | Privacy Policy | Website designed by Manato</p>

        </div>

    </footer>

        <!-- Vendors -->    
        <script src="js/libs/jquery.min.js"></script>
        <script src="js/libs/angular.min.js"></script>
        <script src="js/libs/lodash.min.js"></script>
        <script src="js/libs/ckeditor/ckeditor.js"></script>
        <script src="js/libs/modernizr-2.8.3.min.js"></script>
        <script src="js/libs/jquery.magnific-popup.min.js"></script>

        <!-- JavaScript -->
        <script src="js/main.js"></script>

    </body>
</html>