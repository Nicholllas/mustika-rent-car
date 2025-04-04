<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class CatalogueController extends Controller
{
    public function index()
    {
        $brands = ['Toyota', 'Honda', 'Mitsubishi', 'Suzuki', 'Isuzu', 'Daihatsu'];
        $types = ['Bus', 'EV'];

        $data = [];

        // Get vehicles by brand
        foreach ($brands as $brand) {
            $key = strtolower($brand);
            $query = Item::with(['type', 'brand'])
                ->whereHas('brand', fn($query) => $query->where('name', $brand))
                ->latest();

            // Check if we need pagination
            if ($query->count() > 8) {
                $data[$key] = $query->paginate(8);
                $data[$key.'_paginated'] = true;
            } else {
                $data[$key] = $query->get();
                $data[$key.'_paginated'] = false;
            }
        }

        // Get vehicles by type
        foreach ($types as $type) {
            $key = strtolower(str_replace(' ', '_', $type));
            $query = Item::with(['type', 'brand'])
                ->whereHas('type', fn($query) => $query->where('name', $type))
                ->latest();

            // Check if we need pagination
            if ($query->count() > 4) {
                $data[$key] = $query->paginate(4);
                $data[$key.'_paginated'] = true;
            } else {
                $data[$key] = $query->get();
                $data[$key.'_paginated'] = false;
            }
        }

        return view('katalog', $data);
    }
}
