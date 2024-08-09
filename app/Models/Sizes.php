<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;

class Sizes extends Model
{
    use HasFactory;
    protected $table = 'sizes';
    protected $fillable = [
        'size',
    ];

    public function Types() : BelongsToMany
    {
        return $this->belongsToMany(NailType::class, 'nails_groupment', 'size_id', 'type_id');
    }

    public function Prices() : BelongsToMany
    {
        return $this->belongsToMany(Prices::class, 'nails_groupment', 'size_id', 'price_id');
    }
}
