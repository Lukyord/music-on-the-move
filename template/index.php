<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <section data-section="index-landing">
        <div class="sc-inner">
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
                    <div class="cloud-big animate reverse-x fadeEntryFromLeft" data-cloud="1" data-wow-delay="0.7s">
                        <div class="variant-1"></div>
                        <div class="variant-2"></div>
                    </div>

                    <div class="cloud-small animate fadeEntryFromLeft" data-cloud="2" data-wow-delay="0.8s"></div>

                    <div class="cloud-big animate fadeEntryFromRight" data-cloud="3" data-wow-delay="0.9s">
                        <div class="variant-1"></div>
                        <div class="variant-2"></div>
                    </div>

                    <div class="cover animate fadeEntryUp" data-wow-delay="0.4s">
                        <?php
                        $section_cover = "./assets/media/design/index-landing-bg.png";
                        $section_cover_m = "./assets/media/design/index-landing-bg-mb.png";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>

                <div class="landing-navigation">
                    <div class="block-content-center animate fadeEntryUp">
                        <div class="block-desc">
                            <p>Engage yourself for 5 days and 4 nights in the middle of nature and the creative surroundings.</p>
                        </div>

                        <div class="block-cta">
                            <a class="button" target="_blank" href="<?php echo $root; ?>accommodation.php">
                                Venues & Accommodation
                            </a>
                        </div>
                    </div>

                    <div class="block-content-center animate fadeEntryUp">
                        <div class="team-list">
                            <?php
                            for ($i = 1; $i <= 3; $i++) {
                            ?>
                                <div class="team">
                                    <?php
                                    $section_cover = "./assets/media/design/team-{$i}.jpg";
                                    $section_cover_m = "./assets/media/design/team-{$i}.jpg";
                                    include("include/function-group.php");
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="block-desc">
                            <p>Elevate your musical journey through intimate chamber music coaching with world-class international mentors and inspiring PGVIM instructors.</p>
                        </div>

                        <div class="block-cta">
                            <a class="button" target="_blank" href="<?php echo $root; ?>team.php">
                                Our Team
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section data-section="index-vision">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="block-content-start text-gradient">
                        <div class="block-subttl">
                            <p>Our Vision</p>
                        </div>
                        <div class="block-ttl opacity-paragraph">
                            <h2 data-split>Music on the Move <span class="font-light">is designed for everyone—regardless of age or experience—to grow at their own pace while collaborating with fellow musicians in an inclusive environment. Participants will perform at beautiful venues where music connects with nature, history, and local culture. Whether in an intimate outdoor setting or a historic landmark, everyone will have the chance to showcase their progress and be part of something special.</span></h2>
                        </div>
                    </div>

                    <div class="decorarion-wrapper">
                        <div class="illus-animation-frame">
                            <div class="variant-1"></div>
                            <div class="variant-2"></div>
                            <div class="variant-3"></div>
                            <div class="variant-4"></div>
                        </div>

                        <?php
                        $section_cover = "./assets/media/design/index-vision-decoration.png";
                        $section_cover_m = "./assets/media/design/index-vision-decoration.png";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="index-gallery">
        <div class="sc-inner">
            <div class="container x3">
                <div class="block-content-center animate fadeEntryUp">
                    <div class="block-subttl">
                        <p>Gallery</p>
                    </div>
                    <div class="block-ttl opacity-paragraph">
                        <h2 class="size-h1">Where Music Becomes a Memory</h2>
                    </div>

                    <div class="block-desc">
                        <p>Captured during last year's camp, this serene outdoor setting highlights the powerful bond between nature and music. Surrounded by lush greenery and fresh air, creating unforgettable moments.</p>
                    </div>
                </div>

                <?php
                $gallery_arr = [
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-1.jpg",
                            "mb" => "./assets/media/design/index-gallery-1.jpg",
                        ],
                        "text" => "where every performance is a chance to share your joy",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-2.jpg",
                            "mb" => "./assets/media/design/index-gallery-2.jpg",
                        ],
                        "text" => "Let nature fuel your practice. Rehearse among trees, and let your surroundings shape your sound.",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-3.jpg",
                            "mb" => "./assets/media/design/index-gallery-3.jpg",
                        ],
                        "text" => "Make lifelong musical friendships",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-4.jpg",
                            "mb" => "./assets/media/design/index-gallery-4.jpg",
                        ],
                        "text" => "Discover techniques, and stories from accomplished mentors who guide with both skill and heart.",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-5.jpg",
                            "mb" => "./assets/media/design/index-gallery-5.jpg",
                        ],
                        "text" => "Make lifelong musical friendships through ensemble rehearsals, conversations, and creative challenges.",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-6.jpg",
                            "mb" => "./assets/media/design/index-gallery-6.jpg",
                        ],
                        "text" => "Discover techniques from accomplished mentors",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-7.jpg",
                            "mb" => "./assets/media/design/index-gallery-7.jpg",
                        ],
                        "text" => "Step onto unique stages—indoors and out—where every performance is a chance to share your growth and joy.",
                    ],
                    [
                        "image" => [
                            "pc" => "./assets/media/design/index-gallery-8.jpg",
                            "mb" => "./assets/media/design/index-gallery-8.jpg",
                        ],
                        "text" => "Let nature fuel your practice",
                    ],
                ]
                ?>

                <div class="hidden-device-md polaroid-marquee">
                    <div class="marquee-wrapper">
                        <div class="marquee" data-js="liMarquee">
                            <?php
                            foreach ($gallery_arr as $item) {
                            ?>
                                <div class="card animate" data-card="polaroid">
                                    <div class="card-cover">
                                        <?php
                                        $section_cover = "./assets/media/design/polaroid.png";
                                        $section_cover_m = "";
                                        include("include/function-group.php");
                                        ?>

                                        <?php /*
                                        <div class="cover-desc">
                                            <p><?php echo $item["text"]; ?></p>
                                        </div>
                                        */ ?>
                                    </div>

                                    <div class="card-image">
                                        <?php
                                        $section_cover = $item["image"]["pc"];
                                        $section_cover_m = $item["image"]["mb"];
                                        include("include/function-group.php");
                                        ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="card-container show-md" data-card-layout="grid">
                    <?php
                    foreach ($gallery_arr as $item) {
                    ?>
                        <div class="card animate fadeEntryUp" data-card="polaroid">
                            <div class="card-cover">
                                <?php
                                $section_cover = "./assets/media/design/polaroid.png";
                                $section_cover_m = "";
                                include("include/function-group.php");
                                ?>

                                <?php /*
                                <div class="cover-desc">
                                    <p><?php echo $item["text"]; ?></p>
                                </div>
                                */ ?>
                            </div>

                            <div class="card-image">
                                <?php
                                $section_cover = $item["image"]["pc"];
                                $section_cover_m = $item["image"]["mb"];
                                include("include/function-group.php");
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section data-section="index-join">
        <div class="sc-inner">
            <div class="container x3">
                <div class="block-content-center animate fadeEntryUp">
                    <div class="block-subttl">
                        <p>Get Ready To Join!</p>
                    </div>
                    <div class="block-ttl">
                        <h2 class="size-h1">How to Prepare <br> for Your Audition</h2>
                    </div>
                </div>

                <div class="card-container animate fadeEntryUp" data-card-layout="slider">
                    <div class="swiper auto">
                        <div class="swiper-wrapper">
                            <?php
                            $join_slide = [
                                [
                                    "image" => [
                                        "pc" => "./assets/media/design/index-join-1.png",
                                        "mb" => "./assets/media/design/index-join-1.png",
                                    ],
                                    "subttl" => "Pick the right piece",
                                    "desc" => "Choose something that reflects your unique style and strengths."
                                ],
                                [
                                    "image" => [
                                        "pc" => "./assets/media/design/index-join-2.png",
                                        "mb" => "./assets/media/design/index-join-2.png",
                                    ],
                                    "subttl" => "Practice and record",
                                    "desc" => "Clear sound and lighting help us hear and see you at your best."
                                ],
                                [
                                    "image" => [
                                        "pc" => "./assets/media/design/index-join-3.png",
                                        "mb" => "./assets/media/design/index-join-3.png",
                                    ],
                                    "subttl" => "Be Yourself & Bring positive energy",
                                    "desc" => "We value passion as much as precision. Let your love for music shine."
                                ]
                            ];

                            foreach ($join_slide as $index => $item) {
                            ?>
                                <div class="swiper-slide animate fadeEntryUp" data-wow-delay="<?php echo $index * 0.3; ?>s">
                                    <div class="slide-image">
                                        <?php
                                        $section_cover = $item["image"]["pc"];
                                        $section_cover_m = $item["image"]["mb"];
                                        include("include/function-group.php");
                                        ?>
                                    </div>

                                    <div class="slide-content">
                                        <span class="slide-counter"><?php echo $index + 1; ?>.</span>
                                        <h3 class="slide-subttl"><?php echo $item["subttl"]; ?></h3>
                                        <p class="slide-desc"><?php echo $item["desc"]; ?></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("include/sc-cta.php"); ?>
</main>

<?php include($root . "footer.php"); ?>