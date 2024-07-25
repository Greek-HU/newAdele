<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Price extends Model
{
    protected $table = 'price';
    protected $fillable = [
        'amount',
    ];

    
    public function Type() : HasOne
    {
        return $this->hasOne(NailType::class, 'nails_groupment', 'price_id', 'type_id');
    }

    public function Size() : HasOne
    {
        return $this->hasOne(NailSize::class, 'nails_groupment', 'price_id', 'opp_id' );
    }
}
