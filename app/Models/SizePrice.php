<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizePrice extends Model
{
    use HasFactory;
    protected $table = 'opp_size';
    protected $fillable = [
        'opp_size',
        'size_id',
    ];

    public function NailOpportunities()
    {
        return $this->belongsTo(NailOpportunities::class);
    }

    public function Sizes()
    {
        return $this->belongsTo(Size::class);
    }
}
