<?php

namespace App\Services;

class DateCheck
{
    public function isValid($strDate, $strFormat = "d/m/Y") {
        $date = \DateTime::createFromFormat($strFormat, $strDate);

        if ($date && (int)$date->format('Y') < 1900) {
            return false;
        }

        return $date && \DateTime::getLastErrors()["error_count"] == 0 ;
    }

}