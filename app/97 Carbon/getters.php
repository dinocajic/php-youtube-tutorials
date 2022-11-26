<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now();

var_dump($now->year);
var_dump($now->yearIso);
var_dump($now->month);
var_dump($now->day);
var_dump($now->hour);
var_dump($now->minute);
var_dump($now->second);
var_dump($now->micro);
var_dump($now->microsecond);
var_dump($now->timestamp);               // seconds since the Unix Epoch
var_dump($now->englishDayOfWeek);        // the day of week in English
var_dump($now->shortEnglishDayOfWeek);   // the abbreviated day of week in English
var_dump($now->englishMonth);            // the month in English
var_dump($now->shortEnglishMonth);       // the abbreviated month in English
var_dump($now->milliseconds);
var_dump($now->millisecond);
var_dump($now->milli);
var_dump($now->week);                    // 1 through 53
var_dump($now->isoWeek);                 // 1 through 53
var_dump($now->weekYear);                // year according to week format
var_dump($now->isoWeekYear);             // year according to ISO week format
var_dump($now->dayOfYear);               // 1 through 366
var_dump($now->age);                     // does a diffInYears() with default parameters
var_dump($now->offset);                  // the timezone offset in seconds from UTC
var_dump($now->offsetMinutes);           // the timezone offset in minutes from UTC
var_dump($now->offsetHours);             // the timezone offset in hours from UTC
var_dump($now->timezone);                // the current timezone
var_dump($now->tz);                      // alias of $timezone
var_dump($now->dayOfWeek);               // 0 (for Sunday) through 6 (for Saturday)
var_dump($now->dayOfWeekIso);            // 1 (for Monday) through 7 (for Sunday)
var_dump($now->weekOfYear);              // ISO-8601 week number of year, weeks starting on Monday
var_dump($now->daysInMonth);             // number of days in the given month
var_dump($now->latinMeridiem);           // "am"/"pm" (Ante meridiem or Post meridiem latin lowercase mark)
var_dump($now->latinUpperMeridiem);      // "AM"/"PM" (Ante meridiem or Post meridiem latin uppercase mark)
var_dump($now->timezoneAbbreviatedName); // the current timezone abbreviated name
var_dump($now->tzAbbrName);              // alias of $timezoneAbbreviatedName
var_dump($now->dayName);                 // long name of weekday translated according to Carbon locale, in english if no translation available for current language
var_dump($now->shortDayName);            // short name of weekday translated according to Carbon locale, in english if no translation available for current language
var_dump($now->minDayName);              // very short name of weekday translated according to Carbon locale, in english if no translation available for current language
var_dump($now->monthName);               // long name of month translated according to Carbon locale, in english if no translation available for current language
var_dump($now->shortMonthName);          // short name of month translated according to Carbon locale, in english if no translation available for current language
var_dump($now->meridiem);                // lowercase meridiem mark translated according to Carbon locale, in latin if no translation available for current language
var_dump($now->upperMeridiem);           // uppercase meridiem mark translated according to Carbon locale, in latin if no translation available for current language
var_dump($now->noZeroHour);              // current hour from 1 to 24
var_dump($now->weeksInYear);             // 51 through 53
var_dump($now->isoWeeksInYear);          // 51 through 53
var_dump($now->weekOfMonth);             // 1 through 5
var_dump($now->weekNumberInMonth);       // 1 through 5
var_dump($now->firstWeekDay);            // 0 through 6
var_dump($now->lastWeekDay);             // 0 through 6
var_dump($now->daysInYear);              // 365 or 366
var_dump($now->quarter);                 // the quarter of this instance, 1 - 4
var_dump($now->decade);                  // the decade of this instance
var_dump($now->century);                 // the century of this instance
var_dump($now->millennium);              // the millennium of this instance
var_dump($now->dst);                     // daylight savings time indicator, true if DST, false otherwise
var_dump($now->local);                   // checks if the timezone is local, true if local, false otherwise
var_dump($now->utc);                     // checks if the timezone is UTC, true if UTC, false otherwise
var_dump($now->timezoneName);            // the current timezone name
var_dump($now->tzName);                  // alias of $timezoneName
var_dump($now->locale);                  // locale of the current instance

