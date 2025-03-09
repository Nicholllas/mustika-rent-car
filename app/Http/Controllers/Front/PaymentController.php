<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function index(Request $request, $bookingId)
    {
        $booking = Booking::with(['item.brand', 'item.type'])->findOrFail($bookingId);

        return view('payment', [
            'booking' => $booking
        ]);
    }

    public function detail(Request $request, $bookingId)
    {
        $booking = Booking::with(['item.brand', 'item.type'])->findOrFail($bookingId);

        return view('payment-detail', [
            'booking' => $booking
        ]);
    }



    public function update(Request $request, $bookingId)
    {
    $booking = Booking::findOrFail($bookingId);
    $booking->payment_method = $request->payment_method;
    $booking->save(); // Simpan metode pembayaran ke database

    // Format data booking
    $namaMobil = $booking->item->brand->name . ' ' . $booking->item->type->name;

    // Hitung durasi dari start_date ke end_date
    $startDate = Carbon::parse($booking->start_date);
    $endDate = Carbon::parse($booking->end_date);
    $durasi = $startDate->diffInDays($endDate) . ' hari';

    $tanggalMulai = $startDate->format('d/m/Y');
    $tanggalSelesai = $endDate->format('d/m/Y');

    // Format harga tanpa mengubahnya ke integer
    $hargaFormatted = number_format($booking->total_price, 0, ',', '.');

    // Buat pesan WhatsApp
    $pesan = "Halo, Saya ingin mengonfirmasi booking dengan detail berikut:\n\n"
    . "*Booking ID:* {$booking->invoice_number}\n"
    . "*Nama Penyewa:* {$booking->name}\n"
    . "*Mobil:* $namaMobil\n"
    . "*Durasi:* $durasi\n"
    . "*Tanggal Sewa:* $tanggalMulai - $tanggalSelesai\n"
    . "*Metode Pembayaran:* {$booking->payment_method}\n"
    . "*Total Harga:* Rp {$hargaFormatted},-\n\n"
    . "Mohon konfirmasinya. Terima kasih!";

    // Encode pesan dengan rawurlencode agar tetap rapi
    $pesanEncoded = rawurlencode($pesan);

    // Nomor admin WhatsApp
    $nomorAdmin = "6285716762077";

    // Redirect ke WhatsApp
    return redirect("https://wa.me/$nomorAdmin?text=$pesanEncoded");

    }



    public function success(Request $request)
    {
        return view('success');
    }
}
