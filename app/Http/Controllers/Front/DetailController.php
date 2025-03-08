<?php

namespace App\Http\Controllers\Front;

use App\Models\Faq;
use App\Models\Item;
use App\Models\Variant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function index ($slug)
    {
        $variant = Variant::all();
        $faqs = Faq::where('status', 1)->get();
        $item = Item::with(['type', 'brand','variant'])->whereSlug($slug)->firstOrFail();
        $similiarItems = Item::with(['type', 'brand',])
            // ->where('type_id', $item->type_id)
            ->where('id', '!=', $item->id)
            ->get();

        return view('detail', [
            'item' => $item,
            'similiarItems' => $similiarItems,
            'variant'=> $variant,
            'faqs' => $faqs
        ]);
    }
}
