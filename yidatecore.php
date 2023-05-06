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
    date_default_timezone_set($default_timezone);
    return shortcode_atts(array('year' => intval(date("Y")), 'month' => intval(date("m")), 
                                'day' => intval(date("d"))),
                          $atts);
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
