<footer id="footer">
    <div class="footer-decoration">
        <div class="illus-4"></div>
        <div class="illus-8"></div>
        <div class="illus-5"></div>
        <div class="illus-2"></div>
        <div class="illus-9"></div>

        <?php
        $section_cover = "./assets/media/design/footer-decoration.png";
        $section_cover_m = "./assets/media/design/footer-decoration-mb.png";
        include("include/function-group.php");
        ?>
    </div>

    <div class="footer-nav">
        <div class="footer-brand">
            <a class="brand" href="<?php echo $root; ?>index.php">
                <img class="logo" src="<?php echo $root; ?>assets/media/design/logo.svg" alt="">
            </a>
        </div>

        <div class="footer-links">
            <ul class="links">
                <li>
                    <a class="clickable" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdVLiMcGUV-IRLqFLf281iqP7qLRq4CTcfhQILhWbWFMc81Iw/viewform">
                        APPLY NOW
                    </a>
                </li>
                <li>
                    <a class="clickable" href="<?php echo $root; ?>accommodation.php">
                        Venues & Accommodation
                    </a>
                </li>
                <li>
                    <a class="clickable" href="<?php echo $root; ?>team.php">
                        Our Team
                    </a>
                </li>
                <li>
                    <a class="clickable" href="<?php echo $root; ?>policy.php">
                        Policy
                    </a>
                </li>
            </ul>
        </div>

        <div class="footer-social">
            <ul class="social">
                <li><a href="https://www.facebook.com/MusicontheMovebyPGVIM" target="_blank" class="clickable"><i class="ic ic-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/music.onthemove/" target="_blank" class="clickable"><i class="ic ic-instagram"></i></a></li>
                <li><a href="https://lin.ee/gT5W0Vd1" target="_blank" class="clickable"><i class="ic ic-line"></i></a></li>
                <li><a href="https://www.youtube.com/@PGVIMChannel" target="_blank" class="clickable"><i class="ic ic-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php //if($page_index) { include($root."include/_wp-code/wp-cookie-law-info-bar.php"); } 
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/js/library/jquery-ui-effect.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/gsap.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollTrigger.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/ScrollToPlugin.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/gsap/Flip.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/util.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/script.js?v=<?php echo time(); ?>"></script>


</body>

</html>