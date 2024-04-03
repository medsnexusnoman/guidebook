<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class BaseModel extends Model
{
    use HasFactory;

    public static function getImage($photo_reference)
    {
        $data = "https://maps.googleapis.com/maps/api/place/photo?" .
            "photo_reference=" . $photo_reference .
            "&key=" . env('GOOGLE_MAP_KEY');

        $response = Http::withoutVerifying()->get($data);
        dd($response);
        if ($response->successful()) {

            $responseData = $response->json();
            return $responseData;
        } else {
            dd("Error: Unable to fetch data from the Google Places API.");
        }
    }
}
