<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Jane Doe',
                'message' => 'Just deployed my first laravel app.',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'John Smith',
                'message' => 'Laravel makes web development fun again.',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Slamet Riyadhi',
                'message' => 'Working on somethin cool with chirper.',
                'time' => '3 hours ago'
            ],
        ];

        return view('home', ['chirps' => $chirps]);
    }
}
