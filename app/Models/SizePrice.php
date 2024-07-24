<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizePrice extends Model
{
    use HasFactory;
    protected $table = 'size_price';
    protected $fillable = [
        'size_id',
        'price_id'
    ];

    public function NailSize()
    {
        return $this->belongsTo(NailSize::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
