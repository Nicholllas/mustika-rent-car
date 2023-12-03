<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogueController extends Controller
{
    public function index()
{
    $toyota = Item::with(['type', 'brand'])
                    ->whereHas('brand', function ($query) {
                        $query->where('name', 'Toyota');
                    })
                    ->latest()
                    ->take(4)
                    ->get();

    $honda = Item::with(['type', 'brand'])
                    ->whereHas('brand', function ($query) {
                        $query->where('name', 'Honda');
                    })
                    ->latest()
                    ->take(4)
                    ->get();

    return view('katalog', [
        'honda' => $honda,
        'toyota' => $toyota,
    ]);
}

}
