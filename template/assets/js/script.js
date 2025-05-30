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
