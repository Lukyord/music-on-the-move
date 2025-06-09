<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="accommodation-main">
    <section data-section="accommodation-landing">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <div class="block-content-center animate fadeEntryUp">
                    <div class="block-ttl">
                        <h1>VenueS & accommodation</h1>
                    </div>

                    <div class="block-subttl">
                        <p>SPEND 5 DAYS AND NIGHTS WITH INSPIRATION
                            <br> FROM NATURE AND CREATIVE SURROUNDINGS
                        </p>
                    </div>

                    <div class="block-cta">
                        <a href="#accomodation-venue" class="button link-scroll">
                            Venues
                        </a>

                        <a href="#accomodation-package" class="button link-scroll">
                            Package Options
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

                    <div class="accordion animate fadeEntryFromRight" data-wow-delay="1.2s">
                        <div class="instrument"></div>
                        <div class="shadow animate fadeIn" data-wow-delay="1.8s"></div>
                    </div>

                    <div class="cover animate fadeEntryUp" data-wow-delay="0.4s">
                        <?php
                        $section_cover = "./assets/media/design/accommodation-landing-bg.png";
                        $section_cover_m = "./assets/media/design/accommodation-landing-bg-mb.png";
                        include("include/function-group.php");
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section data-section="content-template-1">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <div class="content">
                    <div class="media animate fadeEntryUp">
                        <?php
                        $section_cover = "./assets/media/design/accommodation-1.jpg";
                        $section_cover_m = "./assets/media/design/accommodation-1.jpg";
                        include("include/function-group.php");
                        ?>
                        <div class="decoration animate fadeEntryFromLeft" data-wow-delay="0.4s">
                            <?php
                            $section_cover = "./assets/media/design/accommodation-decoration-1.png";
                            $section_cover_m = "./assets/media/design/accommodation-decoration-1.png";
                            include("include/function-group.php");
                            ?>
                        </div>
                    </div>

                    <div class="block-content-center animate fadeEntryUp">
                        <div class="block-subttl">
                            <p>The Hotel</p>
                        </div>

                        <div class="block-ttl">
                            <h2>hotel labaris khaoyai</h2>
                        </div>

                        <ul class="social">
                            <li><a href="https://www.facebook.com/MusicontheMovebyPGVIM" target="_blank" class="clickable"><i class="ic ic-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/music.onthemove/" target="_blank" class="clickable"><i class="ic ic-instagram"></i></a></li>
                            <li><a href="https://lin.ee/gT5W0Vd1" target="_blank" class="clickable"><i class="ic ic-global-o"></i></a></li>
                        </ul>

                        <div class="block-desc">
                            <h5>GET THE CELEBRITY TREATMENT WITH
                                <br class="show-sm"> WORLD-CLASS SERVICE AT HOTEL LABARIS KHAO YAI
                            </h5>
                            <p>Hotel Labaris Khao Yai in Pakchong offers a 5-star experience with free WiFi, a year-round outdoor swimming pool, and a lush garden. Guests can relax on the terrace or enjoy meals at the modern restaurant. The hotel features family rooms, a hot tub, and a children's playground. Additional facilities include a fitness centre, outdoor play area, and a coffee shop. Free bicycles are available for exploring the surroundings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="content-template-2">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="block-content-center animate fadeEntryUp">
                        <div class="block-ttl">
                            <h2>SPEND 5 DAYS AND NIGHTS WITH
                                <br class="show-md"> INSPIRATION FROM NATURE
                            </h2>
                        </div>

                        <div class="block-desc">
                            <p>
                                Hotel Labaris Khao Yai in Pakchong offers a 5-star experience with free WiFi, a year-round outdoor swimming pool, and a lush garden. Guests can relax on the terrace or enjoy meals at the modern restaurant. The hotel features family rooms, a hot tub, and a children's playground. Additional facilities include a fitness centre, outdoor play area, and a coffee shop. Free bicycles are available for exploring the surroundings.
                            </p>
                        </div>
                    </div>

                    <div class="media-wrapper">
                        <div class="media animate fadeEntryUp" data-media="1">
                            <?php
                            $section_cover = "./assets/media/design/accommodation-2.jpg";
                            $section_cover_m = "./assets/media/design/accommodation-2.jpg";
                            include("include/function-group.php");
                            ?>

                            <div class="illus-5 animate fadeEntryFromLeft" data-wow-delay="0.4s"></div>
                        </div>

                        <div class="media animate fadeEntryUp" data-media="2" data-wow-delay="0.6s">
                            <?php
                            $section_cover = "./assets/media/design/accommodation-3.jpg";
                            $section_cover_m = "./assets/media/design/accommodation-3.jpg";
                            include("include/function-group.php");
                            ?>

                            <div class="decoration animate fadeEntryFromRight" data-wow-delay="0.8s">
                                <?php
                                $section_cover = "./assets/media/design/accommodation-decoration-2.png";
                                $section_cover_m = "./assets/media/design/accommodation-decoration-2.png";
                                include("include/function-group.php");
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section data-section="performance-venue" id="accomodation-venue">
        <div class="sc-inner sc-inner--precedes">
            <div class="container">
                <div class="swiper auto fade no-touch">
                    <div class="swiper-wrapper">
                        <?php
                        $performance_venues = [
                            [
                                "date" => "Friday, 18 July 2025",
                                "date-short" => "18 July 2025",
                                "time" => "18:30 - 19:30",
                                "venue-ttl" => "Resonance at Nhapha Khao Yai Resort",
                                "links" => [
                                    "facebook" => "https://www.facebook.com/nhaphakhaoyai",
                                    "global-o" => "https://nhapha-khaoyai.com/",
                                ],
                                "venue-desc" => "Acoustics. Architecture. Aesthetics. Atmosphere. <br><br> A special clarinet recital by Andrew Simon — set not just in a venue, but in dialogue with the architecture of Nhapha Khao Yai Resort, creating harmony between form and sound for an unforgettable guest experience."
                            ],
                            [
                                "date" => "Saturday, 19 July 2025",
                                "date-short" => "19 July 2025",
                                "time" => "15:30 - 17:00",
                                "venue-ttl" => "KHAO YAI ART FOREST",
                                "links" => [
                                    "facebook" => "https://www.facebook.com/profile.php?id=61569868164323",
                                    "global-o" => "https://www.khaoyaiart.com/",
                                ],
                                "venue-desc" => "An intimate music walk through <strong>Khao Yai Art Forest</strong> — where nature, art pieces, and live music engage in conversation. Each performance becomes an echo, gently resonating through trees, trails, and sculptures."
                            ],
                            [
                                "date" => "Sunday, 20 July 2025",
                                "date-short" => "20 July 2025",
                                "time" => "14:00 - 15:00",
                                "venue-ttl" => "Harudot Khao Yai by NANA Coffee Roasters",
                                "links" => [
                                    "facebook" => "https://www.facebook.com/khaoyai.harudot",
                                    "global-o" => "https://nanacoffeeroasters.com/",
                                ],
                                "venue-desc" => "Sound. Sip. Slow. <br><br> A relaxed yet elevated afternoon experience that blends the warmth of live music with the culture of coffee. Enjoy curated chamber performances while savoring signature beverages, surrounded by the calm, green beauty of Harudot Khao Yai by NANA Coffee Roasters' outdoor setting."
                            ]
                        ];

                        foreach ($performance_venues as $index => $performance_venue) {
                        ?>
                            <div class="swiper-slide">
                                <div class="block-content-center">
                                    <div class="block-subttl">
                                        <p>Performance Venue</p>
                                    </div>

                                    <div class="block-ttl">
                                        <h2><?php echo $performance_venue["venue-ttl"]; ?></h2>
                                    </div>

                                    <ul class="social">
                                        <?php foreach ($performance_venue["links"] as $key => $link) { ?>
                                            <li><a href="<?php echo $link; ?>" target="_blank" class="clickable"><i class="ic ic-<?php echo $key; ?>"></i></a></li>
                                        <?php } ?>
                                    </ul>


                                    <div class="block-desc">
                                        <h5><?php echo $performance_venue["date"]; ?></h5>
                                        <p><?php echo $performance_venue["venue-desc"]; ?></p>
                                    </div>
                                </div>

                                <div class="venue-gallery card-container" data-card-layout="slider">
                                    <div class="swiper auto insufficient">
                                        <div class="swiper-wrapper">
                                            <?php
                                            for ($i = 1; $i <= 4; $i++) {
                                            ?>
                                                <div class="swiper-slide">
                                                    <div class="media animate fadeIn" data-wow-delay="<?php echo ($i - 1) * 0.2; ?>s">
                                                        <?php
                                                        $section_cover = "./assets/media/design/accommodation-" . ($i - 1 + 4) . ".jpg";
                                                        $section_cover_m = "./assets/media/design/accommodation-" . ($i - 1 + 4) . ".jpg";
                                                        include("include/function-group.php");
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="date-note animate fadeEntryUp" data-wow-delay="1s">
                                    <?php
                                    $section_cover = "./assets/media/design/cta-note.png";
                                    $section_cover_m = "./assets/media/design/cta-note.png";
                                    include("include/function-group.php");
                                    ?>

                                    <div class="note">
                                        <h5>Performance Date</h5>
                                        <h3><?php echo $performance_venue["date-short"]; ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                    <div class="swiper-pagination custom animate fadeEntryUp" data-text="Performance Venue" data-wow-delay="0.4s"></div>
                    <div class="swiper-nav animate fadeEntryUp" data-wow-delay="0.6s">
                        <div class="swiper-button-prev button"></div>
                        <div class="swiper-button-next button"></div>
                    </div>
                </div>

                <div class="venue-bg animate fadeEntryUp" data-wow-delay="0.8s">
                    <?php
                    $section_cover = "./assets/media/design/accommodation-venue-bg.png";
                    $section_cover_m = "./assets/media/design/accommodation-venue-bg-mb.png";
                    include("include/function-group.php");
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section data-section="map">
        <div class="sc-inner">
            <div class="container">
                <div class="content">
                    <div class="decoration" data-decoration="1">
                        <?php
                        $section_cover = "./assets/media/design/map-decoration-1.png";
                        $section_cover_m = "./assets/media/design/map-decoration-1.png";
                        include("include/function-group.php");
                        ?>
                    </div>

                    <div class="illus-wrapper">
                        <div class="illus-10"></div>
                        <div class="illus-10"></div>
                    </div>

                    <div class="decoration" data-decoration="2">
                        <?php
                        $section_cover = "./assets/media/design/map-decoration-2.png";
                        $section_cover_m = "./assets/media/design/map-decoration-2.png";
                        include("include/function-group.php");
                        ?>
                    </div>

                    <div class="decoration" data-decoration="3">
                        <?php
                        $section_cover = "./assets/media/design/map-decoration-3.png";
                        $section_cover_m = "./assets/media/design/map-decoration-3.png";
                        include("include/function-group.php");
                        ?>
                    </div>

                    <div class="card-container" data-card-layout="slider">
                        <div class="swiper auto centered-m">
                            <div class="swiper-wrapper">
                                <?php
                                $map = [
                                    [
                                        "type" => "hotel",
                                        "map-image" => "./assets/media/design/map-hotel-labaris-khaoyai.jpg",
                                        "map-subttl" => "The Hotel",
                                        "map-ttl" => "hotel labaris khaoyai",
                                        "map-link" => "https://www.hotellabaris.com/"
                                    ],
                                    [
                                        "type" => "venue",
                                        "map-image" => "./assets/media/design/map-resonance.jpg",
                                        "map-subttl" => "Performance Venue",
                                        "map-ttl" => "Resonance at Nhapha Khao Yai Resort",
                                        "map-link" => "https://maps.app.goo.gl/6WZnvDhUaSKvJRcz9"
                                    ],
                                    [
                                        "type" => "venue",
                                        "map-image" => "./assets/media/design/map-khaoyai-art-forest.jpg",
                                        "map-subttl" => "Performance Venue",
                                        "map-ttl" => "KHAO YAI ART FOREST",
                                        "map-link" => "https://maps.app.goo.gl/tg1HMgZzdAer2YGfA"
                                    ],
                                    [
                                        "type" => "venue",
                                        "map-image" => "./assets/media/design/map-harudot-khao-yai.jpg",
                                        "map-subttl" => "Performance Venue",
                                        "map-ttl" => "Harudot Khao Yai by NANA Coffee Roasters",
                                        "map-link" => "https://maps.app.goo.gl/oEmXUGtdzwbCK4hj9"
                                    ]
                                ];

                                foreach ($map as $index => $map_item) {
                                ?>
                                    <div class="swiper-slide <?php echo $map_item["type"]; ?>">
                                        <div class="media">
                                            <div class="map">
                                                <?php
                                                $section_cover = $map_item["map-image"];
                                                $section_cover_m = $map_item["map-image"];
                                                include("include/function-group.php");
                                                ?>
                                            </div>

                                            <div class="paper">
                                                <?php
                                                $section_cover = "./assets/media/design/paper-texture-cream.png";
                                                $section_cover_m = "";
                                                include("include/function-group.php");
                                                ?>
                                            </div>
                                        </div>

                                        <div class="block-content-center">
                                            <div class="block-subttl">
                                                <p><?php echo $map_item["map-subttl"]; ?></p>
                                            </div>

                                            <div class="block-ttl">
                                                <h3><?php echo $map_item["map-ttl"]; ?></h3>
                                            </div>

                                            <div class="block-cta">
                                                <a href="<?php echo $map_item["map-link"]; ?>" target="_blank" class="button">
                                                    Get Direction
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section="accommodation-package" id="accomodation-package">
        <div class="sc-inner sc=inner==precedes">
            <div class="container">
                <div class="content">
                    <?php
                    $packages_arr = [
                        [
                            "type" => "package",
                            "name" => "Explorer",
                            "price" => "THB 15,000",
                            "price-desc" => [],
                            "content" => "<p>For those who prefer to arrange their own accommodation but don't want to miss out on the full musical experience.</p>",
                            "note" => [
                                [
                                    "icon" => "accommodation",
                                    "not-included" => "true",
                                    "desc" => "No accommodation included"
                                ],
                                [
                                    "icon" => "meal",
                                    "desc" => "Lunch and dinner are included"
                                ]
                            ]
                        ],
                        [
                            "type" => "package",
                            "name" => "Sibling Groove",
                            "price" => "THB 17,500",
                            "price-desc" => [
                                "person"
                            ],
                            "content" => "
                            <p>Specially designed for families embarking on a musical journey together.</p>
                            <ul class='wp-block-list'>
                                <li>Shared Room: Siblings Only</li>
                            </ul>
                            ",
                            "note" => [
                                [
                                    "icon" => "accommodation",
                                    "desc" => "Shared room with a sibling<br>(2 people per room)"
                                ],
                                [
                                    "icon" => "meal",
                                    "desc" => "Lunch and dinner are included"
                                ]
                            ]
                        ],
                        [
                            "type" => "package",
                            "name" => "Sibling Trio",
                            "price" => "THB 16,500",
                            "price-desc" => [
                                "person"
                            ],
                            "content" => "
                            <p>Perfect for families full of musical spirit.</p>
                            <ul class='wp-block-list'>
                                <li>Shared Room: 3 Siblings</li>
                            </ul>
                            ",
                            "note" => [
                                [
                                    "icon" => "accommodation",
                                    "desc" => "Three siblings sharing one room<br>(maximum 3 people per room)"
                                ],
                                [
                                    "icon" => "meal",
                                    "desc" => "Lunch and dinner are included"
                                ]
                            ]
                        ],
                        [
                            "type" => "package",
                            "name" => "Duet Stay",
                            "price" => "THB 19,000",
                            "price-desc" => [
                                "person"
                            ],
                            "content" => "
                            <p>Make new friends and connect through music.</p>
                            ",
                            "note" => [
                                [
                                    "icon" => "accommodation",
                                    "desc" => "Shared room with another participant."
                                ],
                                [
                                    "icon" => "meal",
                                    "desc" => "Lunch and dinner are included"
                                ]
                            ]
                        ],
                        [
                            "type" => "package",
                            "name" => "Solo Harmony",
                            "price" => "THB 27,000",
                            "price-desc" => [],
                            "content" => "
                            <p>A private room for the participant, with the option for one parent to stay.</p>
                            <ul class='wp-block-list'>
                                <li>Private Room - Parent may stay</li>
                            </ul>
                            ",
                            "note" => [
                                [
                                    "icon" => "meal",
                                    "not-included" => "true",
                                    "desc" => "Meals for the parent (lunch and dinner) are not included"
                                ]
                            ]
                        ],
                        [
                            "type" => "add-on",
                            "name" => "+Family (Add-On)",
                            "price" => "THB +1,650",
                            "price-desc" => [
                                "person",
                                "night"
                            ],
                            "content" => "
                            <p>Add an accompanying family member (in the same room)</p>
                            ",
                            "note" => [
                                [
                                    "icon" => "accommodation",
                                    "desc" => "Maximum 3 people per room"
                                ],
                                [
                                    "icon" => "meal",
                                    "not-included" => "true",
                                    "desc" => "Lunch and dinner not included<br>(Optional meal plans available)"
                                ]
                            ]
                        ],
                    ];
                    ?>

                    <div class="block-content-center">
                        <div class="block-subttl animate fadeIn">
                            <p>Music on the Move 2025 - Package Options</p>
                        </div>

                        <div class="block-ttl animate fadeIn">
                            <h2>Stay your way. Play your part.</h2>
                        </div>

                        <div class="thumbs-slide">
                            <div class="swiper thumbs animate fadeIn">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($packages_arr as $index => $package) {
                                    ?>
                                        <div class="swiper-slide">
                                            <a class="button" href="javascript:void(0);">
                                                <?php echo $package["name"]; ?>
                                            </a>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="swiper top animate fadeIn">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach ($packages_arr as $index => $package) {
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="card animate fadeEntryUp <?php echo $package["type"] ?>" data-card="package">
                                                <div class="card-header">
                                                    <div class="card-ttl">
                                                        <h3><?php echo $package["name"]; ?></h3>
                                                    </div>
                                                    <div class="card-subttl">
                                                        <p>
                                                            <?php echo $package["price"]; ?>
                                                            <?php foreach ($package["price-desc"] as $price_desc) { ?>
                                                                /<?php echo $price_desc; ?>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="entry-content">
                                                        <?php echo $package["content"]; ?>
                                                    </div>
                                                </div>
                                                <?php if (!empty($package["note"])) { ?>
                                                    <div class="card-footer">
                                                        <p>Note :</p>
                                                        <ul>
                                                            <?php foreach ($package["note"] as $note) { ?>
                                                                <li>
                                                                    <i class="ic ic-<?php echo $note["icon"]; ?> <?php if (isset($note["not-included"])) echo "not-included" ?>"></i>
                                                                    <p><?php echo $note["desc"]; ?></p>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>


                        </div>

                        <div class="block-desc animate fadeIn">
                            <h3>All package prices include <strong>transportation, travel insurance, meals, and program fees</strong>
                                <br /> for the entire <strong>5 days / 4 nights.</strong>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("include/sc-cta.php"); ?>

</main>

<?php include($root . "footer.php"); ?>