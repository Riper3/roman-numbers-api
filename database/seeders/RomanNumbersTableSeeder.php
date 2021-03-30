<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RomanNumber;

class RomanNumbersTableSeeder extends Seeder
{
    public function run()
    {
      RomanNumber::truncate();

      for ($i = 0; $i < 50; $i++) {
        $number = rand(1, 3999);

        RomanNumber::create([
            'number' => $number,
            'roman_number' => RomanNumber::convertToRoman($number),
            'requested' => rand(1, 10),
        ]);
      }
    }
}
