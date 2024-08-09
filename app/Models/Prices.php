<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prices extends Model
{
    protected $table = 'prices';
    protected $fillable = [
        'amount',
    ];

    public function Sizes() : BelongsToMany
    {
        return $this->belongsToMany(Sizes::class, 'nails_groupment', 'price_id', 'size_id' );
    }

    public function Opps() : BelongsToMany
    {
        return $this->belongsToMany(NailOpportunities::class, 'nails_groupment', 'price_id', 'opp_id' );
    }
    public function Types() : BelongsToMany
    {
        return $this->belongsToMany(NailType::class, 'nails_groupment', 'price_id', 'type_id' );
    }
}
