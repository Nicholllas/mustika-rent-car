<?php

namespace App\Http\Controllers\Admin;

use App\Models\Variant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\VariantRequest;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
        $query = Variant::query();

        return DataTables::of($query)
            ->addColumn('action', function ($variant) {
                return '
                    <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                        href="' . route('admin.variants.edit', $variant->id) . '">
                        Sunting
                    </a>
                    <form class="block w-full" onsubmit="return confirm(\'Apakah anda yakin?\');" -block" action="' . route('admin.variants.destroy', $variant->id) . '" method="POST">
                    <button class="w-full px-2 py-1 text-xs text-white transition duration-500 bg-red-500 border border-red-500 rounded-md select-none ease hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                        Hapus
                    </button>
                        ' . method_field('delete') . csrf_field() . '
                    </form>';
            })
            ->rawColumns(['action'])
            ->make();
    }

    return view('admin.variants.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.variants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VariantRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(5));

        Variant::create($data);

        return redirect()->route('admin.variants.index')->with('success','Variant berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Variant $variant)
    {
        return view('admin.variants.edit', [
            'variant' => $variant,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VariantRequest $request, Variant $variant)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']) . '-' . Str::lower(Str::random(5));

        $variant->update($data);

        return redirect()->route('admin.variants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Variant $variant)
    {
        $variant->delete();

        return redirect()->route('admin.variants.index');
    }
}
