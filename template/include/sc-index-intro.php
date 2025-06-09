<section data-section="index-intro">
    <div class="sc-billboard">
        <div class="light-gradient"></div>

        <div class="cloud-small" data-cloud="1"></div>

        <div class="cloud-big reverse-x" data-cloud="2">
            <div class="variant-1"></div>
            <div class="variant-2"></div>
        </div>

        <div class="cloud-small" data-cloud="3"></div>

        <div class="cloud-small" data-cloud="4"></div>

        <div class="cloud-big" data-cloud="5">
            <div class="variant-1"></div>
            <div class="variant-2"></div>
        </div>


        <div class="cloud-big" data-cloud="6">
            <div class="variant-1"></div>
            <div class="variant-2"></div>
        </div>

        <div class="pseudo-header hidden-device-sm">
            <!-- CTA -->
            <?php include($root . "include/el-header-cta.php"); ?>

            <!-- Menu Control -->
            <?php include($root . "include/el-header-menu-ctrl.php"); ?>
        </div>

        <div class="content">
            <div class="video-container">
                <div class="video-wrapper">
                    <div class="cover animate fadeIn">
                        <?php
                        $section_cover = "./assets/media/design/index-intro-video.mp4";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>

            <div class="decoration-bg illus-6 hidden-device-sm"></div>

            <div class="decoration-container">
                <div class="decoration-wrapper">
                    <div class="decoration-left">
                        <div class="illus-7"></div>
                        <div class="illus-7"></div>
                    </div>

                    <div class="decoration-bg illus-6 show-sm"></div>

                    <div class="decoration-instrument">
                        <?php
                        $section_cover = "./assets/media/design/intro-decoration-1.png";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                    <div class="decoration-tree">
                        <?php
                        $section_cover = "./assets/media/design/intro-decoration-2.png";
                        $section_cover_m = "";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>