<?php
/*
Plugin Name: yidate
Description: A simple WordPress plugin to format a date in English and Yiddish.
English date format: <month name in 3-letter abbreviation> <day>, <year>
Yiddish date format (in transliteration): dem <day><day suffix> <month name> <year>
Version: 1.0
Author: Meyer David
*/

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

function print_my_date($year, $month, $day) {
    // Format date in English
    $formatted_date = format_english_date($year, $month, $day);
    echo $formatted_date;
    echo "\n";

    // Format date in Yiddish
    $formatted_date = format_yiddish_date($year, $month, $day);
    echo $formatted_date;
    echo "\n";
}
?>