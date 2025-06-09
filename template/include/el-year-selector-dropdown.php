<button class="year-selector">
    <span class="year-selector-current">MENTORS 2025</span>
    <ul class="year-selector-list">
        <?php
        $first = true;
        foreach ($page_info as $year => $info) {
        ?>
            <li>
                <a
                    href="javascript:;"
                    data-year="<?php echo $year; ?>"
                    class="year-selector-item <?php if ($first) echo 'active'; ?>">
                    MENTORS <?php echo $year; ?>
                </a>
            </li>
        <?php
            $first = false;
        } ?>
    </ul>

    <i class="ic ic-chevron-down"></i>
</button>