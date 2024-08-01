<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Size extends Model
{
    protected $table = 'Size';
    protected $fillable = [
        'size',
        'amount',
    ];

    public function Type() : BelongsToMany
    {
        return $this->belongsToMany(NailType::class, 'nails_groupment', 'size_id', 'type_id' );
    }

    public function Opp() : BelongsToMany
    {
        return $this->belongsToMany(NailSize::class, 'nails_groupment', 'size_id', 'opp_id' );
    }
}
