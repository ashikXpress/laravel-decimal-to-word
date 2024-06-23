<?php

namespace Ashik\DecimalToWord;

use NumberFormatter;

class DecimalToWord
{
    public function formatBDT($number)
    {
        $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);

        // Split the number into the integer part and the fractional part
        $parts = explode('.', number_format($number, 2, '.', ''));

        // Extract integer and decimal parts
        $integerPart = $parts[0];
        $decimalPart = isset($parts[1]) ? $parts[1] : '00';

        // Split integer part into crore, lakh, thousand, hundred, and remaining
        $crore = floor($integerPart / 10000000);
        $remainder = $integerPart % 10000000;
        $lakh = floor($remainder / 100000);
        $remainder = $remainder % 100000;
        $thousand = floor($remainder / 1000);
        $remainder = $remainder % 1000;
        $hundred = floor($remainder / 100);
        $remainder = $remainder % 100;

        // Anonymous function to capitalize each word
        $capitalizeWords = function ($str) {
            return ucwords(str_replace('-', ' ', $str));
        };

        // Convert each part to words
        $croreWords = $crore > 0 ? $capitalizeWords($formatter->format($crore)) . " Crore" : "";
        $lakhWords = $lakh > 0 ? $capitalizeWords($formatter->format($lakh)) . " Lakh" : "";
        $thousandWords = $thousand > 0 ? $capitalizeWords($formatter->format($thousand)) . " Thousand" : "";
        $hundredWords = $hundred > 0 ? $capitalizeWords($formatter->format($hundred)) . " Hundred" : "";
        $remainderWords = $remainder > 0 ? $capitalizeWords($formatter->format($remainder)) : "";

        // Assemble the integer part
        $integerFormatted = trim("$croreWords $lakhWords $thousandWords $hundredWords $remainderWords");

        // Convert the decimal part to words
        $decimalInWords = $decimalPart == '00' ? "" : $capitalizeWords($formatter->format($decimalPart));

        // Assemble the final formatted string
        $formatted = ucfirst($integerFormatted) . " Taka" . ($decimalInWords ? " " . $decimalInWords . " Poisha" : "");

        return $formatted;
    }
}
