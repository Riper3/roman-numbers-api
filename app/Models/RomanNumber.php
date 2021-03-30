<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomanNumber extends Model
{
    use HasFactory;

    public static function convertToRoman($number)
    {
      $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
      $romannumber = '';
      while ($number > 0) {
        foreach ($map as $romanchacter => $int) {
            if($number >= $int) {
                $number -= $int;
                $romannumber .= $romanchacter ;
                break;
            }
        }
      }
      
      return $romannumber;
    }

     protected $fillable = ['number', 'roman_number', 'requested'];
}
