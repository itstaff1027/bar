<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoterController extends Controller
{
    public function index()
    {
        // Define the promoters as an array
        $promoters = [
            [
                'id' => 1,
                'name' => 'Promoter 1',
                'associates' => [
                    ['name' => 'Associate 1A'],
                    ['name' => 'Associate 1B']
                ]
            ],
            [
                'id' => 2,
                'name' => 'Promoter 2',
                'associates' => [
                    ['name' => 'Associate 2A'],
                    ['name' => 'Associate 2B'],
                    ['name' => 'Associate 2C']
                ]
            ],
            [
                'id' => 3,
                'name' => 'Promoter 3',
                'associates' => [] // No associates for this promoter
            ],
            [
                'id' => 4,
                'name' => 'Promoter 4',
                'associates' => [
                    ['name' => 'Associate 4A']
                ]
            ],
            [
                'id' => 5,
                'name' => 'Promoter 5',
                'associates' => [
                    ['name' => 'Associate 5A'],
                    ['name' => 'Associate 5B'],
                    ['name' => 'Associate 5C'],
                    ['name' => 'Associate 5D']
                ]
            ]
        ];
        
        return view('welcome', compact('promoters'));
    }
}
