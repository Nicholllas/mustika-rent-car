<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'address',
        'city',
        'zip',
        'status',
        'payment_method',
        'payment_status',
        'payment_url',
        'total_price',
        'item_id',
        'user_id',
        'invoice_number'
    ];

    protected $dates = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    protected $casts = [
    'start_date'  => 'date:Y-m-d',
    'end_date' => 'date:Y-m-d',
];

    public function item ()
    {
        return $this->belongsTo(Item::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
