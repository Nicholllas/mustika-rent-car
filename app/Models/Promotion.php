<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Promotion extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = 'promotions';

    // protected $primaryKey = 'id_promo';

    protected $fillable = [
        'judul',
        'deskripsi',
        'potongan',
        'tanggal_mulai',
        'tanggal_berakhir',
        'photos',
        'status',
    ];

    
    protected $casts = [
        'photos' => 'array'
    ];

    public function getThumbnailAttribute()
    {
    // If photos exist
    if ($this->photos) {
    return Storage::url(json_decode($this->photos)[0]);
    }

    return asset('images/default.png');
    }

    // public function items ()
    // {
    //     return $this->hasMany(Item::class);
    // }
}
