/*::* SCROLL TO TOP ON LOAD *::*/
jQuery(document).ready(function ($) {
    // Disable browser's automatic scroll restoration
    if ("scrollRestoration" in history) {
        history.scrollRestoration = "manual";
    }

    // Force scroll to top
    $("html, body").scrollTop(0);

    // Backup scroll after a short delay
    setTimeout(function () {
        $("html, body").scrollTop(0);
    }, 100);
});

/*::* DETECT RESIZING *::*/
jQuery(document).ready(function ($) {
    onWindowResize(
        () => {
            $("html").removeClass("resizing");
        },
        300,
        true,
        () => {
            $("html").addClass("resizing");
        }
    );
});

/*::* INDEX INTRO *::*/
jQuery(document).ready(function ($) {
    if ($("[data-section='index-intro']").length === 0) return;

    const headerHeight = $("#header").outerHeight();

    $(window).on("scroll", function () {
        checkIfScrolledPast(
            $("[data-section='index-intro']"),
            headerHeight,
            () => {
                $(".header-intro").addClass("scrolled-past-intro");
                $("#header").addClass("fixed-mb");
            },
            () => {
                $(".header-intro").removeClass("scrolled-past-intro");
                $("#header").removeClass("fixed-mb");
            }
        );
    });

    onWindowResize(function () {
        const headerIntroHeight = $(".header-intro").outerHeight();
        $("[data-section='index-intro']").css({
            "--header-intro-height": `${headerIntroHeight}px`,
        });
    });
});

/*::* CURSOR *::*/
jQuery(document).ready(function () {
    const cursor = $(".cursor");
    const clickable = $(".clickable, .button");

    let currentX = 0;
    let currentY = 0;
    let targetX = 0;
    let targetY = 0;
    const lerpFactor = 0.075;
    let isFirstMove = true;

    cursor.hide();

    function enableCursorInteractions() {
        $(document).on("mousemove.cursorControl", function (e) {
            targetX = e.clientX;
            targetY = e.clientY;

            if (isFirstMove && targetX !== 0 && targetY !== 0) {
                cursor.fadeIn();
                isFirstMove = false;
            }
        });

        cursor.html(`
            <div class="circle"></div>
            <div class="illus-1 default"></div>
            <div class="illus-2 hover"></div>
            <div class="illus-3 hover"></div>
            <div class="illus-4 hover"></div>
            <div class="illus-5 hover"></div>
        `);

        function updateCursorPosition() {
            currentX = lerp(currentX, targetX, lerpFactor);
            currentY = lerp(currentY, targetY, lerpFactor);

            cursor.css({
                top: `${currentY}px`,
                left: `${currentX}px`,
            });

            requestAnimationFrame(updateCursorPosition);
        }

        updateCursorPosition();

        clickable.on("mouseenter.cursorControl", function () {
            cursor.addClass("hover-cursor");
        });

        clickable.on("mouseleave.cursorControl", function () {
            cursor.removeClass("hover-cursor");
        });
    }

    function lerp(start, end, factor) {
        return start + (end - start) * factor;
    }

    function disableCursorInteractions() {
        $(document).off("mousemove.cursorControl");
        clickable.off(".cursorControl");
        cursor.removeClass("hover-cursor").html("");
    }

    function handleCursorFeature() {
        const isLargeScreen = $(window).width() > 767;
        const isDevice = $("html").hasClass("is-device");
        const touchEvents = $("html").hasClass("touchevents");

        if (isLargeScreen || !touchEvents || !isDevice) {
            enableCursorInteractions();
            isFirstMove = true;
        } else {
            disableCursorInteractions();
        }
    }

    onWindowResize(handleCursorFeature);
});

/*::* TEXT GRADIENT SCROLL *::*/
jQuery(document).ready(function ($) {
    $(".text-gradient").each(function () {
        const textGradientScroll = $(this);
        const paragraphScroll = textGradientScroll.find(".opacity-paragraph");
        const word = paragraphScroll.find(".word");

        const scrollConfig = {
            trigger: paragraphScroll[0],
            start: "top 90%",
            end: "bottom 40%",
            scrub: true,
            toggleActions: "play play reverse reverse",
        };

        gsap.fromTo(
            word,
            {
                opacity: 0.2,
            },
            {
                opacity: 1,
                duration: 1.5,
                stagger: 0.5,
                scrollTrigger: scrollConfig,
            }
        );
    });
});

/*::* FIT TEXT *::*/
jQuery(document).ready(function ($) {
    $("[data-section='performance-venue']").each(function () {
        const performanceVenue = $(this);
        const dateNoteSubttl = performanceVenue.find(".date-note .note > h5");
        const dateNoteDate = performanceVenue.find(".date-note .note > h3");

        dateNoteSubttl.fitText(1.2, {
            minFontSize: "8px",
            maxFontSize: "16px",
        });

        dateNoteDate.fitText(1.2, {
            minFontSize: "12px",
            maxFontSize: "16px",
        });
    });
});

/*::* MAP SLIDER *::*/
jQuery(document).ready(function ($) {
    if ($("[data-section='map']").length === 0) return;

    const mapSliderContainer = $("[data-section='map'] .card-container");
    const mapSliderBlockContent = mapSliderContainer.find("[class*='block-content-']");
    let maxContentHeight = 0;

    onWindowResize(function () {
        mapSliderBlockContent.each(function () {
            const contentHeight = $(this).outerHeight();
            if (contentHeight > maxContentHeight) {
                maxContentHeight = contentHeight;
            }
        });

        mapSliderContainer.css({
            "--max-content-height": `${maxContentHeight}px`,
        });
    });
});

/*::* THUMBS SWIPER *::*/
jQuery(document).ready(function ($) {
    $(".thumbs-slide").each(function () {
        const $this = $(this);
        const topSwiper = $this.find(".swiper.top")[0];
        const thumbsSwiper = $this.find(".swiper.thumbs")[0];

        const slideAutoplay = $this.hasClass("autoplay");
        const slidePause = $this.hasClass("pause");
        const autoplayInterval = $this.data("autoplay-interval");

        const slideButtonNext =
            $this.find(".swiper-button-next")[0] ||
            $this.parent().find(".swiper-button-next")[0] ||
            $(".swiper-button-next")[0];
        const slideButtonPrev =
            $this.find(".swiper-button-prev")[0] ||
            $this.parent().find(".swiper-button-prev")[0] ||
            $(".swiper-button-prev")[0];

        var galleryThumbs = new Swiper(thumbsSwiper, {
            centeredSlides: true,
            slidesPerView: "auto",
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            on: {
                init: function () {
                    const activeVideos = $this.find(".swiper.thumbs .swiper-slide-active video[autoplay]");
                    activeVideos.each(function () {
                        this.pause();
                    });
                },
            },
        });

        var galleryTop = new Swiper(topSwiper, {
            slidesPerView: 1,
            effect: "slide",
            speed: 1000,
            fadeEffect: {
                crossFade: true,
            },
            centeredSlides: true,
            slideToClickedSlide: true,
            centerInsufficientSlides: true,
            navigation: {
                nextEl: slideButtonNext,
                prevEl: slideButtonPrev,
            },
            autoplay: {
                delay: autoplayInterval || 4000,
                disableOnInteraction: false,
            },
            thumbs: {
                swiper: galleryThumbs,
            },
            on: {
                slideChangeTransitionStart: function () {
                    const activeVideos = $this.find(".swiper.top .swiper-slide-active video[autoplay]");
                    activeVideos.each(function () {
                        try {
                            this.currentTime = 0;
                            const playPromise = this.play();
                            if (playPromise !== undefined) {
                                playPromise.catch((error) => {
                                    if (error.name !== "AbortError") {
                                        console.error("Video playback error:", error);
                                    }
                                });
                            }
                        } catch (error) {
                            console.error("Error handling video:", error);
                        }
                    });

                    //update thumbs swiper slide active to the same index
                    galleryThumbs.slideTo(galleryTop.realIndex);
                },
                slideChangeTransitionEnd: function () {
                    const inactiveVideos = $this.find(".swiper.top .swiper-slide:not(.swiper-slide-active) video");
                    inactiveVideos.each(function () {
                        try {
                            this.pause();
                            this.currentTime = 0;
                        } catch (error) {
                            console.error("Error pausing video:", error);
                        }
                    });
                },
            },
        });

        function vdoData($this, callback) {
            const videoSlides = $this.find("video[autoplay]");
            let loadedCount = 0;

            if (videoSlides.length === 0) {
                callback();
                return;
            }

            videoSlides.each(function () {
                const vdo = $(this)[0];

                vdo.preload = "metadata";

                vdo.load();

                vdo.onloadedmetadata = function () {
                    const vdoTime = (vdo.duration - 1) * 1000;
                    $(vdo).closest(".swiper-slide").attr("data-swiper-autoplay", vdoTime);

                    loadedCount++;

                    if (loadedCount === videoSlides.length) {
                        callback();
                    }
                };
            });
        }

        galleryTop.autoplay.stop();

        vdoData($this.find(".swiper.top"), function () {
            if (slideAutoplay) galleryTop.autoplay.start();

            if (slidePause) {
                $this
                    .on("mouseenter", () => galleryTop.autoplay.stop())
                    .on("mouseleave", () => galleryTop.autoplay.start());
            }
        });
    });
});

/*::* YEAR SELECTOR *::*/
jQuery(document).ready(function ($) {
    $(".year-selector").each(function () {
        const $selector = $(this);
        const $yearCurrent = $(".year-selector-current");
        const $yearList = $(".year-selector-list");
        const $yearItems = $(".year-selector-item");

        $selector.on("click", function (e) {
            e.preventDefault();
            $selector.toggleClass("active");
            $yearList.slideToggle();
        });

        // Handle click on year items
        $yearItems.on("click", function (e) {
            e.preventDefault();
            const year = $(this).data("year");

            // Update current selection
            $yearCurrent.text("MENTORS " + year);

            // Update active tab content
            $(".tab-content").removeClass("active");
            $(`.tab-content[data-tab-content="${year}"]`).addClass("active");
            $(`.tab-content[data-modal-content="${year}"]`).addClass("active");

            $yearItems.removeClass("active");
            $(".year-selector-item[data-year='" + year + "']").addClass("active");
        });

        $(document).on("click", function (e) {
            if (!$(e.target).closest(".year-selector").length) {
                $selector.removeClass("active");
                $yearList.slideUp();
            }
        });
    });
});

/*::* MENTOR MODAL *::*/
jQuery(document).ready(function ($) {
    const $modal = $(".mentor-modal");
    if ($modal.length === 0) return;

    const $modalContent = $modal.find(".tab-content");
    const $modalOverlay = $modal.find(".modal-overlay");
    const $modalCloseBtn = $modal.find(".modal-close-button");

    function getScreenCategory() {
        return window.innerWidth <= 768 ? "small" : "large";
    }

    // Modal Swiper
    $modalContent.each(function () {
        const $this = $(this);
        const $swiper = $this.find(".swiper.main");
        const swiperNav = $this.find(".swiper-nav");
        const swiperNavPrev = swiperNav.find(".swiper-button-prev")[0];
        const swiperNavNext = swiperNav.find(".swiper-button-next")[0];

        let slides;
        let activeSlideIndex = 0;
        let currentScreen = null;

        function initializeSwiper() {
            const newScreen = getScreenCategory();

            if (newScreen === currentScreen && slides) {
                return;
            }

            currentScreen = newScreen;

            if (slides) {
                activeSlideIndex = slides.realIndex;
                slides.destroy(true, true);
            }

            let prevSlideConfig = isSmallScreen
                ? {
                      translate: ["-100%", "0%", 0],
                      rotate: [0, 0, 0],
                      origin: "center",
                  }
                : {
                      translate: ["-105%", "10%", -100],
                      rotate: [0, 0, -4],
                      origin: "bottom",
                  };

            let nextSlideConfig = isSmallScreen
                ? {
                      translate: ["100%", "0%", 0],
                      rotate: [0, 0, 0],
                      origin: "center",
                  }
                : {
                      translate: ["105%", "10%", -100],
                      rotate: [0, 0, 4],
                      origin: "bottom",
                  };

            slides = new Swiper($swiper[0], {
                speed: 1500,
                loop: true,
                centeredSlides: true,
                slidesPerView: "auto",
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                slideToClickedSlide: true,
                navigation: {
                    nextEl: swiperNavNext,
                    prevEl: swiperNavPrev,
                },
                effect: "creative",
                creativeEffect: {
                    shadowPerProgress: true,
                    limitProgress: 8,
                    prev: prevSlideConfig,
                    next: nextSlideConfig,
                },
            });

            slides.slideToLoop(activeSlideIndex, 0);
        }

        onWindowResize(initializeSwiper, (delay = 500));
    });

    // Open Modal
    $("[data-card='mentor']").click(function (e) {
        e.preventDefault();
        const cardIndex = $(this).data("card-index");
        const year = $(this).closest(".tab-content").data("tab-content");

        // Show modal
        $modal.addClass("active");

        // Slide to correct mentor
        const activeSwiper = $(`.tab-content[data-modal-content="${year}"] .swiper.main`)[0].swiper;
        if (activeSwiper) {
            activeSwiper.slideToLoop(cardIndex, 0);
        }
    });

    // Close Modal
    $modalOverlay.on("click", function (e) {
        e.preventDefault();
        $modal.removeClass("active");
    });

    $modalCloseBtn.on("click", function (e) {
        e.preventDefault();
        $modal.removeClass("active");
    });
});

/*::* ORGANIZER SELECTOR HOVER *::*/
jQuery(document).ready(function ($) {
    if ($("[data-section='organizer']").length === 0) return;

    $("[data-section='organizer'] .tab-content").each(function () {
        const $this = $(this);
        const $organizerList = $this.find(".organizer-list");
        const $organizerSelector = $organizerList.find(".selector");
        const $organizerItems = $organizerList.find(".organizer-item");
        const $organizerAvatars = $organizerSelector.find(".organizer-avatar");
        const $loadMoreButton = $this.find(".loadmore-button");

        let lastHoveredIndex = -1;
        const maxVisibleItems = 10;
        let isExpanded = false;

        // Set initial avatar opacity
        $organizerAvatars.eq(0).css("opacity", "1");

        function moveSelectorToItem(index) {
            const $item = $organizerItems.eq(index);
            const itemTop = $item.position().top;
            const itemHeight = $item.outerHeight();

            $organizerSelector.css({
                top: `${itemTop}px`,
                height: `${itemHeight}px`,
            });

            // Update avatar opacity
            if (lastHoveredIndex !== -1) {
                $organizerAvatars.eq(lastHoveredIndex).css("opacity", "0");
            }
            $organizerAvatars.eq(index).css("opacity", "1");
            lastHoveredIndex = index;
        }

        function calculateListHeight(showAll = false) {
            let totalHeight = 0;
            $organizerItems.each(function (index) {
                if (showAll || index < maxVisibleItems) {
                    $(this).show();
                    totalHeight += $(this).outerHeight();
                } else {
                    $(this).hide();
                }
            });
            return totalHeight + 1;
        }

        function updateListState() {
            const newHeight = calculateListHeight(isExpanded);
            $organizerList.css("height", `${newHeight}px`);
            $loadMoreButton.text(isExpanded ? "Show Less" : "Load More");

            // If collapsing, move selector to the last visible item
            if (!isExpanded && lastHoveredIndex >= maxVisibleItems) {
                moveSelectorToItem(maxVisibleItems - 1);
            }
        }

        $organizerItems.on("mouseenter", function () {
            const $this = $(this);
            const itemIndex = $this.index() - 1;
            moveSelectorToItem(itemIndex);
        });

        // Show/hide load more button based on total items
        if ($organizerItems.length <= maxVisibleItems) {
            $loadMoreButton.hide();
        } else {
            $loadMoreButton.show();

            onWindowResize(updateListState);

            $loadMoreButton.on("click", function (e) {
                e.preventDefault();
                isExpanded = !isExpanded;
                updateListState();
            });
        }
    });
});
