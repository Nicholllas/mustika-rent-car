<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Item::with(['type', 'brand'])->whereSlug($slug)->firstOrFail();

        return view('checkout', [
            'item' => $item
        ]);
    }

   public function store(Request $request, $slug)
   {
   // Validate the request
   $request->validate([
   'name' => 'required',
   'start_date' => 'required',
   'end_date' => 'required',
   'address' => 'required',
   'city' => 'required',
   'zip' => 'required'
   ]);

   // Format start_date and end_date from dd mm yyyy to timestamp
   $start_date = Carbon::createFromFormat('d m Y', $request->start_date);
   $end_date = Carbon::createFromFormat('d m Y', $request->end_date);

   // Count the number of days between start_date and end_date
   $days = $start_date->diffInDays($end_date);

   // Get the item
   $item = Item::whereSlug($slug)->firstOrFail();

   // Calculate the total price
   $total_price = $days * $item->price;

   // Add 11% tax
   $total_price = $total_price + ($total_price * 0.11);

   // Ambil tanggal sistem untuk invoice
   $tanggalBooking = Carbon::now()->format('dmY');

   // Hitung jumlah transaksi pada hari itu
   $countTodayTransactions = \App\Models\Booking::whereDate('created_at', Carbon::today())->count() + 1;

   // Format nomor invoice (MRC/tanggal/transaksi_keberapa)
   $invoice_number = "MRC/{$tanggalBooking}/" . str_pad($countTodayTransactions, 2, '0', STR_PAD_LEFT);

   // Create a new booking
   $booking = $item->bookings()->create([
   'invoice_number' => $invoice_number,
   'name' => $request->name,
   'start_date' => $start_date,
   'end_date' => $end_date,
   'address' => $request->address,
   'city' => $request->city,
   'zip' => $request->zip,
   'user_id' => auth()->user()->id,
   'total_price' => $total_price
   ]);

   return redirect()->route('front.payment', $booking->id);
   }


}
