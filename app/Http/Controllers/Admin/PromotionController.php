<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use Illuminate\Http\Request;
use App\Models\Promotion;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ItemUpdateRequest;

class PromotionController extends Controller
{
    // 🔍 Read (Index)
    public function index()
    {
        if (request()->ajax()) {
            $query = Promotion::query();
    
            return DataTables::of($query)
                ->editColumn('photos', function ($promotion) {
                    return '<img src="' . $promotion->photos . '" alt="photos" class="w-20 mx-auto rounded-md">';
                    })
                ->addColumn('action', function ($promotion) {
                    return '
                        <a class="block w-full px-2 py-1 mb-1 text-xs text-center text-white transition duration-500 bg-gray-700 border border-gray-700 rounded-md select-none ease hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('admin.promotions.edit', $promotion->id) . '">
                            Sunting
                        </a>
                        <form class="block w-full" onsubmit="return confirm(\'Apakah anda yakin?\');" -block" action="' . route('admin.promotions.destroy', $promotion->id) . '" method="POST">
                        <button class="w-full px-2 py-1 text-xs text-white transition duration-500 bg-red-500 border border-red-500 rounded-md select-none ease hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->rawColumns(['action','photos'])
                ->make();
        }
    
        return view('admin.promotions.index');
    }


    public function create()
    {
        return view('admin.promotions.create');
    }

    // 🚀 Store (Create)
    public function store(Request $request)
    {
        $data = $request->all();


        //upload multiple photos
        if($request->hasFile('photos')) {
            $photos = [];

            foreach($request->file('photos') as $photo) {
                $photoPath = $photo->store('assets/item', 'public');

                //push to array
                array_push($photos, $photoPath);    
            }

            $data['photos'] = json_encode($photos);
        }
        Promotion::create($data);

        return redirect()->route('admin.promotions.index');
    }

    // 🔍 Show (Detail)
    public function show(Request $request, Promotion $promotion)
    {
        return view('promotions.show', compact('promotion'));
    }

    // 🖊 Edit (Form)
    public function edit(Promotion $promotion,Request $request)
    {
        // $promotion = Promotion::where('id', $request->id)->get();
        // var_dump($promotion->id);die;
        return view('admin.promotions.edit', compact('promotion'));
    }

    // 🖊 Update
    public function update(Request $request, Promotion $promotion)
    {
        $data = $request->all();

        //upload multiple photos, if there is new photo
        if($request->hasFile('photos')) {
        $photos = [];

        foreach($request->file('photos') as $photo) {
        $photoPath = $photo->store('assets/item', 'public');

        //push to array
        array_push($photos, $photoPath);
        }

        $data['photos'] = json_encode($photos);
        }else{
            $data['photos'] = $item->photos;
        }
        $item->update($data);

        return redirect()->route('admin.promotion.index');
    }

    // ❌ Delete
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotions.index')->with('success', 'Promo berhasil dihapus!');
    }
}
