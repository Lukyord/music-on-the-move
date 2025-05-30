<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section data-section="index-landing">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <div class="block-content-center animate fadeEntryUp">
                    <div class="block-subttl">
                        <p>Music Moves Differently Here</p>
                    </div>
                    <div class="block-ttl">
                        <h1>Music On The Move 2025</h1>
                    </div>

                    <div class="block-desc">
                        <p>A one-of-a-kind music camp by PGVIM, offering an immersive chamber music experiencethat goes far beyond the concert hall. Here, music blends with movement, setting, and soul,creating a fresh perspective that invites musicians to connect with each otherand their audience in unexpected, meaningful ways.</p>
                    </div>

                    <div class="block-cta">
                        <a class="button" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdVLiMcGUV-IRLqFLf281iqP7qLRq4CTcfhQILhWbWFMc81Iw/viewform">
                            APPLY NOW
                        </a>
                    </div>
                </div>

                <div class="landing-bg">
                    <div class="cloud-big animate fadeEntryFromLeft" data-cloud="1">
                        <div class="variant-1"></div>
                        <div class="variant-2"></div>
                    </div>

                    <div class="cloud-small animate fadeEntryFromLeft" data-cloud="2"></div>


                    <div class="cloud-big animate fadeEntryFromRight" data-cloud="3">
                        <div class="variant-1"></div>
                        <div class="variant-2"></div>
                    </div>

                    <div class="cover animate fadeEntryUp" data-wow-delay="0.4s">
                        <?php
                        $section_cover = "./assets/media/design/index-landing-bg.png";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>