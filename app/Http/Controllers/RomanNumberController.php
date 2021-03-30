<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RomanNumber;

class RomanNumberController extends Controller
{

  public function request(Request $request)
  {
    $bodyrequest = json_decode($request->getContent());

    $romannumber = RomanNumber::where('number', $bodyrequest->number)
                   ->get()->first();

    if($romannumber) {
      $newrequested = $romannumber->requested + 1;
      $romannumber->update(['requested' => $newrequested]);
    } else {
      $romannumber = RomanNumber::create([
        'number' => $request->number,
        'roman_number' => RomanNumber::convertToRoman($request->number),
        'requested' => 1,
      ]);
    }

    return $romannumber;
  }

  public function latest(Request $request)
  {
    $romannumbers = RomanNumber::orderByDesc('updated_at')->
                   limit(5)->get();

    return $romannumbers;
  }

  public function top(Request $request)
  {
    $romannumbers = RomanNumber::orderByDesc('number')->
                   limit(10)->get();

    return $romannumbers;
  }

}
