<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class NailType extends Model
{
    protected $table = 'nail_type';
    protected $fillable = [
        'type',
        'size_title',
        'price_title',
    ];

    public function Size() : BelongsToMany
    {
        return $this->belongsToMany(NailSize::class, 'nails_groupment', 'type_id', 'size_id');
    }

    public function Price() : BelongsToMany
    {
        return $this->belongsToMany(Price::class, 'nails_groupment', 'type_id', 'price_id');
    }
}

