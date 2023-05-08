# yidate - a simple WordPress plugin to format a date in English and Yiddish.

## Yiddish Date Format


Yiddish date format (in transliteration): `dem <day><day suffix> <month name> <year>`

Example: `דעם 8טן מײַ 2023`


English date format: `<month name in English 3-letter abbreviation> <day>, <year>`

Example: `Apr 17, 2023`


## Examples

  * Yiddish current date (based on US/Eastern time, shown on May 8, 2023): `[yidate]` דעם 8טן מײַ 2023
  * Yiddish date explicitly set as May 8, 2023: `[yidate year=2023 month=5 day=8]` דעם 8טן מײַ 2023
  * Yiddish date specifying year only (month/day default to current, shown on May 8): `[yidate year=1941]` דעם 8טן מײַ 1941
  * Yiddish date specifying month/date only (year defaults to current, shown in 2023): `[yidate  month=5 day=8]` דעם 8טן מײַ 1941


  * English current date (based on US/Eastern time, shown on Apr 17, 2023): `[yidate]` Apr 17, 2023
  * English date explicitly set as Apr 17, 2023: `[yidate year=2023 month=4 day=17]` Apr 17, 2023
  * English date specifying year only (month/day default to current, shown on Apr 17): `[yidate year=1941]` Apr 17, 2023
  * English date specifying month/date only (year defaults to current, shown in 2023): `[yidate  month=4 day=17]` Apr 17, 2023

#### Author: Mark H. (Meyer) David (@markhdavid) for the [League for Yiddish, Inc.](https://leagueforyiddish.org)
#### Copyright 2023 League for Yiddish, Inc.
