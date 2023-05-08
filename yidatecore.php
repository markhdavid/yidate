<?php

function format_english_date($year, $month, $day) {
    $date = date_create($year . '-' . $month . '-' . $day);
    return date_format($date, 'M j, Y');
}

function format_yiddish_date($year, $month, $day) {
    $yiddish_month_dict = array(
                                1 => 'יאַנואַר',
                                2 => 'פֿעברואַר',
                                3 => 'מאַרץ',
                                4 => 'אַפּריל',
                                5 => 'מײַ',
                                6 => 'יוני',
                                7 => 'יולי',
                                8 => 'אויגוסט',
                                9 => 'סעפּטעמבער',
                                10 => 'אָקטאָבער',
                                11 => 'נאָוועמבער',
                                12 => 'דעצעמבער'
                                );
    $yiddish_month = $yiddish_month_dict[$month];
    $day_suffix = ($day < 20) ? 'טן' : 'סטן';
    $date = date_create($year . '-' . $month . '-' . $day);
    $yiddish_date = "דעם {$day}{$day_suffix} {$yiddish_month} {$year}";
    return $yiddish_date;
}

global $default_timezone;
$default_timezone = 'America/New_York'; // set default timezone, default US Eastern

function get_shortcode_atts($atts) {
    // If year, month, or day are set in $atts and are integers in a
    // valid range, they're used.  Note, however, that month/day
    // overflows are considered valid, e.g., 31 Nov or 29 Feb in
    // non-leap years. Otherwise, year defaults to the current year.
    // If either month or day is unset or invalid, they default to the
    // current month and day, according to global $default_timezone.

    $year = isset($atts['year']) ? $atts['year'] : false;
    $need_year = false;
    if ($year !== false) {
        $year = filter_var($year, FILTER_VALIDATE_INT);
        if ($year === false || $year < 0 || $year > 9999) {
            error_log("Warning: year " . $atts['year'] . " bad in shortcode, will use current year.");
            $need_year = true;
        }
    } else {
        $need_year = true;
    };

    $month = isset($atts['month']) ? $atts['month'] : false;
    $need_month = false;
    if ($month !== false) {
        $month = filter_var($month, FILTER_VALIDATE_INT);
        if ($month === false || $month < 1 || $month > 12) {
            error_log("Warning: month " . $atts['month'] . " bad in shortcode, will use current month/day.");
            $need_month = true;
        }
    } else {
        $need_month = true;
    };

    $day = isset($atts['day']) ? $atts['day'] : false;
    $need_day = false;
    if ($day !== false) {
        $day = filter_var($day, FILTER_VALIDATE_INT);
        if ($day === false || $day < 1 || $day > 31) {
            error_log("Warning: day " . $atts['day'] . " bad in shortcode, will use current month/day.");
            $need_day = true;
        }
    } else {
        $need_day = true;
    };

    
    if ($need_year || $need_month || $need_day) {
        global $default_timezone; 
        $timezone = new DateTimeZone($default_timezone);
        $date = new DateTime('now', $timezone);

        if ($need_year) {
            $year = (int) $date->format('Y'); // extract the year as an integer
        };
        if ($need_month || $need_day) { // Require both month and day, otherwise default both.
            $month = (int) $date->format('n'); // extract the month as an integer
            $day = (int) $date->format('j'); // extract the day as an integer
        };
    };

    return array('year' => $year, 'month' => $month, 'day' => $day);
}

// Define the shortcode for english date
function endate_shortcode_fn( $atts ) {
    // Parse the shortcode attributes
    $atts = get_shortcode_atts($atts);

    // Call the format_english_date() function with the shortcode attributes
    $formatted_date = format_english_date($atts['year'], $atts['month'], $atts['day']);

    // Return the formatted date as the shortcode output
    return $formatted_date;
}

// Define the shortcode for yiddish date
function yidate_shortcode_fn( $atts ) {
    // Parse the shortcode attributes
    $atts = get_shortcode_atts($atts);

    // Call the format_yiddish_date() function with the shortcode attributes
    $formatted_date = format_yiddish_date($atts['year'], $atts['month'], $atts['day']);

    // Return the formatted date as the shortcode output
    return $formatted_date;
}

?>
