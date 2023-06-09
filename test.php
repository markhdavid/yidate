<?php
require 'yidatecore.php';

function print_shortcode_default_values_date() {
    $atts = array(); // empty array to simulate default values

    echo "Current date (default year, month, day):\n";

    $formatted_date = endate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n";

    $formatted_date = yidate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n\n";


    $atts = array('year' => 1971);

    echo "Year = 1971, default month and day:\n";

    $formatted_date = endate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n";

    $formatted_date = yidate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n\n";


    $atts = array('month' => 12, 'day' => "31"); /* notice: integers in strings should be OK */

    echo "Default year, month = 12, day = 31:\n";

    $formatted_date = endate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n";

    $formatted_date = yidate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n\n";

    // Testing error checking:
    $atts = array('year' => "-100"); /* notice: integers in strings ok, but out of range (0..9999) in this case */

    echo "Year = -100 (BAD), default month/day:\n";

    $formatted_date = endate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n";

    $formatted_date = yidate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n\n";

    $atts = array('month' => 13, 'day' => 31);

    echo "Default year, month = 13 (BAD), day = 31:\n";

    $formatted_date = endate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n";

    $formatted_date = yidate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n\n";

    $atts = array('month' => 12, 'day' => 0);

    echo "Default year, month = 12, day = 0 (BAD):\n";

    $formatted_date = endate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n";

    $formatted_date = yidate_shortcode_fn($atts);
    echo $formatted_date;
    echo "\n\n";
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


/* print date via shortcodes, with default arguments, which should get
   current date in the default timezone (Eastern) */
print_shortcode_default_values_date();


/* print all test dates, year 2023 - OK some don't exist, e.g., Feb 31, 2023 */
print_my_date(2023, 1, 1);
print_my_date(2023, 1, 2);
print_my_date(2023, 1, 3);
print_my_date(2023, 1, 4);
print_my_date(2023, 1, 5);
print_my_date(2023, 1, 6);
print_my_date(2023, 1, 7);
print_my_date(2023, 1, 8);
print_my_date(2023, 1, 9);
print_my_date(2023, 1, 10);
print_my_date(2023, 1, 11);
print_my_date(2023, 1, 12);
print_my_date(2023, 1, 13);
print_my_date(2023, 1, 14);
print_my_date(2023, 1, 15);
print_my_date(2023, 1, 16);
print_my_date(2023, 1, 17);
print_my_date(2023, 1, 18);
print_my_date(2023, 1, 19);
print_my_date(2023, 1, 20);
print_my_date(2023, 1, 21);
print_my_date(2023, 1, 22);
print_my_date(2023, 1, 23);
print_my_date(2023, 1, 24);
print_my_date(2023, 1, 25);
print_my_date(2023, 1, 26);
print_my_date(2023, 1, 27);
print_my_date(2023, 1, 28);
print_my_date(2023, 1, 29);
print_my_date(2023, 1, 30);
print_my_date(2023, 1, 31);
print_my_date(2023, 2, 1);
print_my_date(2023, 2, 2);
print_my_date(2023, 2, 3);
print_my_date(2023, 2, 4);
print_my_date(2023, 2, 5);
print_my_date(2023, 2, 6);
print_my_date(2023, 2, 7);
print_my_date(2023, 2, 8);
print_my_date(2023, 2, 9);
print_my_date(2023, 2, 10);
print_my_date(2023, 2, 11);
print_my_date(2023, 2, 12);
print_my_date(2023, 2, 13);
print_my_date(2023, 2, 14);
print_my_date(2023, 2, 15);
print_my_date(2023, 2, 16);
print_my_date(2023, 2, 17);
print_my_date(2023, 2, 18);
print_my_date(2023, 2, 19);
print_my_date(2023, 2, 20);
print_my_date(2023, 2, 21);
print_my_date(2023, 2, 22);
print_my_date(2023, 2, 23);
print_my_date(2023, 2, 24);
print_my_date(2023, 2, 25);
print_my_date(2023, 2, 26);
print_my_date(2023, 2, 27);
print_my_date(2023, 2, 28);
print_my_date(2023, 2, 29);
print_my_date(2023, 2, 30);
print_my_date(2023, 2, 31);
print_my_date(2023, 3, 1);
print_my_date(2023, 3, 2);
print_my_date(2023, 3, 3);
print_my_date(2023, 3, 4);
print_my_date(2023, 3, 5);
print_my_date(2023, 3, 6);
print_my_date(2023, 3, 7);
print_my_date(2023, 3, 8);
print_my_date(2023, 3, 9);
print_my_date(2023, 3, 10);
print_my_date(2023, 3, 11);
print_my_date(2023, 3, 12);
print_my_date(2023, 3, 13);
print_my_date(2023, 3, 14);
print_my_date(2023, 3, 15);
print_my_date(2023, 3, 16);
print_my_date(2023, 3, 17);
print_my_date(2023, 3, 18);
print_my_date(2023, 3, 19);
print_my_date(2023, 3, 20);
print_my_date(2023, 3, 21);
print_my_date(2023, 3, 22);
print_my_date(2023, 3, 23);
print_my_date(2023, 3, 24);
print_my_date(2023, 3, 25);
print_my_date(2023, 3, 26);
print_my_date(2023, 3, 27);
print_my_date(2023, 3, 28);
print_my_date(2023, 3, 29);
print_my_date(2023, 3, 30);
print_my_date(2023, 3, 31);
print_my_date(2023, 4, 1);
print_my_date(2023, 4, 2);
print_my_date(2023, 4, 3);
print_my_date(2023, 4, 4);
print_my_date(2023, 4, 5);
print_my_date(2023, 4, 6);
print_my_date(2023, 4, 7);
print_my_date(2023, 4, 8);
print_my_date(2023, 4, 9);
print_my_date(2023, 4, 10);
print_my_date(2023, 4, 11);
print_my_date(2023, 4, 12);
print_my_date(2023, 4, 13);
print_my_date(2023, 4, 14);
print_my_date(2023, 4, 15);
print_my_date(2023, 4, 16);
print_my_date(2023, 4, 17);
print_my_date(2023, 4, 18);
print_my_date(2023, 4, 19);
print_my_date(2023, 4, 20);
print_my_date(2023, 4, 21);
print_my_date(2023, 4, 22);
print_my_date(2023, 4, 23);
print_my_date(2023, 4, 24);
print_my_date(2023, 4, 25);
print_my_date(2023, 4, 26);
print_my_date(2023, 4, 27);
print_my_date(2023, 4, 28);
print_my_date(2023, 4, 29);
print_my_date(2023, 4, 30);
print_my_date(2023, 4, 31);
print_my_date(2023, 5, 1);
print_my_date(2023, 5, 2);
print_my_date(2023, 5, 3);
print_my_date(2023, 5, 4);
print_my_date(2023, 5, 5);
print_my_date(2023, 5, 6);
print_my_date(2023, 5, 7);
print_my_date(2023, 5, 8);
print_my_date(2023, 5, 9);
print_my_date(2023, 5, 10);
print_my_date(2023, 5, 11);
print_my_date(2023, 5, 12);
print_my_date(2023, 5, 13);
print_my_date(2023, 5, 14);
print_my_date(2023, 5, 15);
print_my_date(2023, 5, 16);
print_my_date(2023, 5, 17);
print_my_date(2023, 5, 18);
print_my_date(2023, 5, 19);
print_my_date(2023, 5, 20);
print_my_date(2023, 5, 21);
print_my_date(2023, 5, 22);
print_my_date(2023, 5, 23);
print_my_date(2023, 5, 24);
print_my_date(2023, 5, 25);
print_my_date(2023, 5, 26);
print_my_date(2023, 5, 27);
print_my_date(2023, 5, 28);
print_my_date(2023, 5, 29);
print_my_date(2023, 5, 30);
print_my_date(2023, 5, 31);
print_my_date(2023, 6, 1);
print_my_date(2023, 6, 2);
print_my_date(2023, 6, 3);
print_my_date(2023, 6, 4);
print_my_date(2023, 6, 5);
print_my_date(2023, 6, 6);
print_my_date(2023, 6, 7);
print_my_date(2023, 6, 8);
print_my_date(2023, 6, 9);
print_my_date(2023, 6, 10);
print_my_date(2023, 6, 11);
print_my_date(2023, 6, 12);
print_my_date(2023, 6, 13);
print_my_date(2023, 6, 14);
print_my_date(2023, 6, 15);
print_my_date(2023, 6, 16);
print_my_date(2023, 6, 17);
print_my_date(2023, 6, 18);
print_my_date(2023, 6, 19);
print_my_date(2023, 6, 20);
print_my_date(2023, 6, 21);
print_my_date(2023, 6, 22);
print_my_date(2023, 6, 23);
print_my_date(2023, 6, 24);
print_my_date(2023, 6, 25);
print_my_date(2023, 6, 26);
print_my_date(2023, 6, 27);
print_my_date(2023, 6, 28);
print_my_date(2023, 6, 29);
print_my_date(2023, 6, 30);
print_my_date(2023, 6, 31);
print_my_date(2023, 7, 1);
print_my_date(2023, 7, 2);
print_my_date(2023, 7, 3);
print_my_date(2023, 7, 4);
print_my_date(2023, 7, 5);
print_my_date(2023, 7, 6);
print_my_date(2023, 7, 7);
print_my_date(2023, 7, 8);
print_my_date(2023, 7, 9);
print_my_date(2023, 7, 10);
print_my_date(2023, 7, 11);
print_my_date(2023, 7, 12);
print_my_date(2023, 7, 13);
print_my_date(2023, 7, 14);
print_my_date(2023, 7, 15);
print_my_date(2023, 7, 16);
print_my_date(2023, 7, 17);
print_my_date(2023, 7, 18);
print_my_date(2023, 7, 19);
print_my_date(2023, 7, 20);
print_my_date(2023, 7, 21);
print_my_date(2023, 7, 22);
print_my_date(2023, 7, 23);
print_my_date(2023, 7, 24);
print_my_date(2023, 7, 25);
print_my_date(2023, 7, 26);
print_my_date(2023, 7, 27);
print_my_date(2023, 7, 28);
print_my_date(2023, 7, 29);
print_my_date(2023, 7, 30);
print_my_date(2023, 7, 31);
print_my_date(2023, 8, 1);
print_my_date(2023, 8, 2);
print_my_date(2023, 8, 3);
print_my_date(2023, 8, 4);
print_my_date(2023, 8, 5);
print_my_date(2023, 8, 6);
print_my_date(2023, 8, 7);
print_my_date(2023, 8, 8);
print_my_date(2023, 8, 9);
print_my_date(2023, 8, 10);
print_my_date(2023, 8, 11);
print_my_date(2023, 8, 12);
print_my_date(2023, 8, 13);
print_my_date(2023, 8, 14);
print_my_date(2023, 8, 15);
print_my_date(2023, 8, 16);
print_my_date(2023, 8, 17);
print_my_date(2023, 8, 18);
print_my_date(2023, 8, 19);
print_my_date(2023, 8, 20);
print_my_date(2023, 8, 21);
print_my_date(2023, 8, 22);
print_my_date(2023, 8, 23);
print_my_date(2023, 8, 24);
print_my_date(2023, 8, 25);
print_my_date(2023, 8, 26);
print_my_date(2023, 8, 27);
print_my_date(2023, 8, 28);
print_my_date(2023, 8, 29);
print_my_date(2023, 8, 30);
print_my_date(2023, 8, 31);
print_my_date(2023, 9, 1);
print_my_date(2023, 9, 2);
print_my_date(2023, 9, 3);
print_my_date(2023, 9, 4);
print_my_date(2023, 9, 5);
print_my_date(2023, 9, 6);
print_my_date(2023, 9, 7);
print_my_date(2023, 9, 8);
print_my_date(2023, 9, 9);
print_my_date(2023, 9, 10);
print_my_date(2023, 9, 11);
print_my_date(2023, 9, 12);
print_my_date(2023, 9, 13);
print_my_date(2023, 9, 14);
print_my_date(2023, 9, 15);
print_my_date(2023, 9, 16);
print_my_date(2023, 9, 17);
print_my_date(2023, 9, 18);
print_my_date(2023, 9, 19);
print_my_date(2023, 9, 20);
print_my_date(2023, 9, 21);
print_my_date(2023, 9, 22);
print_my_date(2023, 9, 23);
print_my_date(2023, 9, 24);
print_my_date(2023, 9, 25);
print_my_date(2023, 9, 26);
print_my_date(2023, 9, 27);
print_my_date(2023, 9, 28);
print_my_date(2023, 9, 29);
print_my_date(2023, 9, 30);
print_my_date(2023, 9, 31);
print_my_date(2023, 10, 1);
print_my_date(2023, 10, 2);
print_my_date(2023, 10, 3);
print_my_date(2023, 10, 4);
print_my_date(2023, 10, 5);
print_my_date(2023, 10, 6);
print_my_date(2023, 10, 7);
print_my_date(2023, 10, 8);
print_my_date(2023, 10, 9);
print_my_date(2023, 10, 10);
print_my_date(2023, 10, 11);
print_my_date(2023, 10, 12);
print_my_date(2023, 10, 13);
print_my_date(2023, 10, 14);
print_my_date(2023, 10, 15);
print_my_date(2023, 10, 16);
print_my_date(2023, 10, 17);
print_my_date(2023, 10, 18);
print_my_date(2023, 10, 19);
print_my_date(2023, 10, 20);
print_my_date(2023, 10, 21);
print_my_date(2023, 10, 22);
print_my_date(2023, 10, 23);
print_my_date(2023, 10, 24);
print_my_date(2023, 10, 25);
print_my_date(2023, 10, 26);
print_my_date(2023, 10, 27);
print_my_date(2023, 10, 28);
print_my_date(2023, 10, 29);
print_my_date(2023, 10, 30);
print_my_date(2023, 10, 31);
print_my_date(2023, 11, 1);
print_my_date(2023, 11, 2);
print_my_date(2023, 11, 3);
print_my_date(2023, 11, 4);
print_my_date(2023, 11, 5);
print_my_date(2023, 11, 6);
print_my_date(2023, 11, 7);
print_my_date(2023, 11, 8);
print_my_date(2023, 11, 9);
print_my_date(2023, 11, 10);
print_my_date(2023, 11, 11);
print_my_date(2023, 11, 12);
print_my_date(2023, 11, 13);
print_my_date(2023, 11, 14);
print_my_date(2023, 11, 15);
print_my_date(2023, 11, 16);
print_my_date(2023, 11, 17);
print_my_date(2023, 11, 18);
print_my_date(2023, 11, 19);
print_my_date(2023, 11, 20);
print_my_date(2023, 11, 21);
print_my_date(2023, 11, 22);
print_my_date(2023, 11, 23);
print_my_date(2023, 11, 24);
print_my_date(2023, 11, 25);
print_my_date(2023, 11, 26);
print_my_date(2023, 11, 27);
print_my_date(2023, 11, 28);
print_my_date(2023, 11, 29);
print_my_date(2023, 11, 30);
print_my_date(2023, 11, 31);
print_my_date(2023, 12, 1);
print_my_date(2023, 12, 2);
print_my_date(2023, 12, 3);
print_my_date(2023, 12, 4);
print_my_date(2023, 12, 5);
print_my_date(2023, 12, 6);
print_my_date(2023, 12, 7);
print_my_date(2023, 12, 8);
print_my_date(2023, 12, 9);
print_my_date(2023, 12, 10);
print_my_date(2023, 12, 11);
print_my_date(2023, 12, 12);
print_my_date(2023, 12, 13);
print_my_date(2023, 12, 14);
print_my_date(2023, 12, 15);
print_my_date(2023, 12, 16);
print_my_date(2023, 12, 17);
print_my_date(2023, 12, 18);
print_my_date(2023, 12, 19);
print_my_date(2023, 12, 20);
print_my_date(2023, 12, 21);
print_my_date(2023, 12, 22);
print_my_date(2023, 12, 23);
print_my_date(2023, 12, 24);
print_my_date(2023, 12, 25);
print_my_date(2023, 12, 26);
print_my_date(2023, 12, 27);
print_my_date(2023, 12, 28);
print_my_date(2023, 12, 29);
print_my_date(2023, 12, 30);
print_my_date(2023, 12, 31);
echo "DONE.\n";
?>
