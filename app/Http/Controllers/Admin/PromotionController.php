<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class PromotionController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $query = Promotion::query();

            return DataTables::of($query)
                ->editColumn('photo', fn($promotion) => '<img src="' . $promotion->thumbnail . '" alt="photo" class="w-20 mx-auto rounded-md">')
                ->addColumn('action', function ($promotion) {
                    return '
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white bg-gray-700 rounded-md"
                            href="' . route('admin.promotions.edit', $promotion->id) . '">
                            Sunting
                        </a>
                        <form class="block w-full" onsubmit="return confirm(\'Apakah anda yakin?\');" action="' . route('admin.promotions.destroy', $promotion->id) . '" method="POST">
                            ' . method_field('delete') . csrf_field() . '
                            <button class="w-full px-2 py-1 text-xs text-white bg-red-500 rounded-md">
                                Hapus
                            </button>
                        </form>';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }

        return view('admin.promotions.index');
    }

    public function create()
    {
        return view('admin.promotions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'disc' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('assets/promotion', 'public');
        }

        Promotion::create($data);
        return redirect()->route('admin.promotions.index')->with('success', 'Promo berhasil ditambahkan!');
    }

    public function edit(Promotion $promotion)
    {
        return view('admin.promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'disc' => 'nullable|numeric',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except('photo');

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($promotion->photo) {
                Storage::disk('public')->delete($promotion->photo);
            }

            // Simpan foto baru
            $data['photo'] = $request->file('photo')->store('assets/promotion', 'public');
        }

        $promotion->update($data);
        return redirect()->route('admin.promotions.index')->with('success', 'Promo berhasil diperbarui!');
    }

    public function destroy(Promotion $promotion)
    {
        if ($promotion->photo) {
            Storage::disk('public')->delete($promotion->photo);
        }

        $promotion->delete();
        return redirect()->route('admin.promotions.index')->with('success', 'Promo berhasil dihapus!');
    }

}
