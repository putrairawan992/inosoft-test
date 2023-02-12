<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function getUom() {
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => [
                'SHP',
                'PKT',
                'MKJ'
            ]
        ]);
    }

    public function getCurrency() {
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => [
                'IDR',
                'USD',
                'AED'
            ]
        ]);
    }

    public function getChargeTo() {
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => [
                'Anton Surapradja',
                'Doni Budianto',
                'Rika Sulawasna'
            ]
        ]);
    }
}