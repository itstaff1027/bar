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
                'name' => 'FROILAN S. YULAY',
                'position'=>'CHIEF OPERATIONS OFFICER (COO)',
                'associates' => [
                    ['name' => 'Associate 1A'],
                    ['name' => 'Associate 1B']
                ]
            ],
            [
                'id' => 2,
                'name' => 'CHRISTOPHER ROUCEL A. DALISAY',
                'position'=>'CHIEF EXECUTIVE OFFICER (CEO)',
                'associates' => [
                    ['name' => 'Associate 2A'],
                    ['name' => 'Associate 2B'],
                    ['name' => 'Associate 2C'],
                    ['name' => 'Associate 2B'],
                    ['name' => 'Associate 2C']
                ]
            ],
            [
                'id' => 3,
                'name' => 'TIMMY G. CABAÑERO',
                'position'=>'CHIEF FINANCIAL OFFICER (CFO)',
                'associates' => [
                    ['name' => 'Associate 4A']
                ]
            ]
        ];
        
        return view('pages.promoter', compact('promoters'));
    }
}
