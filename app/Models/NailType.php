<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NailType extends Model
{
    protected $table = 'nail_type';
    protected $fillable = [
        'type',
    ];

    public function Opps() : BelongsToMany
    {
        return $this->belongsToMany(NailOpportunities::class, 'nails_groupment', 'type_id', 'opp_id');
    }

    public function Sizes() : BelongsToMany
    {
        return $this->belongsToMany(Sizes::class, 'nails_groupment', 'type_id', 'size_id');
    }

    public function Prices() : BelongsToMany
    {
        return $this->belongsToMany(Prices::class, 'nails_groupment', 'type_id', 'price_id');
    }
}

