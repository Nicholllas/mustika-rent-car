<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Variant;

class DetailController extends Controller
{
    public function index ($slug)
    {
        $variant = Variant::all();
        $item = Item::with(['type', 'brand','variant'])->whereSlug($slug)->firstOrFail();
        $similiarItems = Item::with(['type', 'brand',])
            // ->where('type_id', $item->type_id)
            ->where('id', '!=', $item->id)
            ->get();

        return view('detail', [
            'item' => $item,
            'similiarItems' => $similiarItems,
            'variant'=> $variant
        ]);
    }
}
