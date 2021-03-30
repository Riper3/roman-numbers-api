<?php

namespace App\Services;
use App\Models\RomanNumber;

class RomanNumeralConverter
{
  public static function convertInteger($int)
  {
    return RomanNumber::convertToRoman($int);
  }
  
}
