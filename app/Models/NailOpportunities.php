<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class NailOpportunities extends Model
{
    protected $table = 'nail_opportunities';
    protected $fillable = [
        'option',
    ];
    

    public function Types() : BelongsToMany
    {
        return $this->belongsToMany(NailType::class, 'nails_groupment', 'opp_id', 'type_id');
    }

    public function Sizes() : BelongsToMany
    {
        return $this->belongsToMany(Size::class,'nails_groupment', 'opp_id', 'size_id');
    }
}
