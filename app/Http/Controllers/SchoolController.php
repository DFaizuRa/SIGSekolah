<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function api() {
        return response()->json([
            ['name' => 'SMA 1', 'latitude' => -6.2, 'longitude' => 106.8],
            ['name' => 'SMP 2', 'latitude' => -6.3, 'longitude' => 106.7],
        ]);
    }
}
