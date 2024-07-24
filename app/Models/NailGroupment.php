<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NailGroupment extends Model
{
    use HasFactory;
    protected $table = 'nails_groupment';
    protected $fillable = [
        'type_id',
        'size_id',
        'price_id'
    ];

    public function Type() :  HasOne
    {
        return $this->hasOne(NailType::class, 'nails_groupment', 'type_id');
    }
    
    public function NailSize() : BelongsToMany
    {
        return $this->belongsToMany(NailSize::class);
    }

    public function Price() : BelongsToMany
    {
        return $this->belongsToMany(Price::class);
    }
}
