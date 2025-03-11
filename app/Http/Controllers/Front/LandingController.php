<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use App\Models\Faq;
use App\Models\Promotion;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $items = Item::with(['type', 'brand'])->latest()->take(4)->get()->reverse();
        $faqs = Faq::where('status', 1)->get();
        $testimoni = Testimoni::all();
        $slides = Promotion::latest()->take(5)->get(); // Mengambil 5 promo terbaru

        return view('landing', [
            'items' => $items,
            'faqs' => $faqs,
            'testimoni' => $testimoni,
            'slides' => $slides
        ]);
    }
}
