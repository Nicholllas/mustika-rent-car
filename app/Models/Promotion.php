<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Promotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'disc',
        'start_date',
        'end_date',
        'photo', // Mengubah dari 'photos' ke 'photo' (hanya 1 gambar)
    ];

    protected $appends = ['thumbnail'];

    /**
     * Mengembalikan URL thumbnail dari foto promosi.
     * Jika tidak ada foto, maka mengembalikan gambar default.
     */
    public function getThumbnailAttribute()
    {
        if (!empty($this->photo)) {
            return asset('storage/' . $this->photo);
        }

        return asset('images/default.png');
    }

    /**
     * Menghapus foto dari storage dan memperbarui database.
     */
    public function removePhoto()
    {
        if (!empty($this->photo)) {
            Storage::disk('public')->delete($this->photo);
            $this->photo = null;
            $this->save();
        }
    }
}
