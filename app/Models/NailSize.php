<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NailSize extends Model
{
    protected $table = 'nail_size';
    protected $fillable = [
        'size_name',
    ];
    

    public function Type() : BelongsToMany
    {
        return $this->belongsToMany(NailType::class, 'nails_groupment', 'size_id', 'type_id');
    }

    public function Prices() : BelongsToMany
    {
        return $this->belongsToMany(Price::class,'nails_groupment', 'size_id', 'price_id');
    }
}
