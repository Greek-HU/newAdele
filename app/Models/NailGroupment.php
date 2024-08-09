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
        'opp_id',
        'size_id',
        'price_id'
    ];

    public function Type() :  BelongsToMany
    {
        return $this->belongsToMany(NailType::class, 'nails_groupment', 'type_id');
    }
    
    public function NailOpportunities() : BelongsToMany
    {
        return $this->belongsToMany(NailOpportunities::class);
    }

    public function Sizes() : BelongsToMany
    {
        return $this->belongsToMany(Sizes::class);
    }

    public function Prices() : BelongsToMany
    {
        return $this->belongsToMany(Prices::class);
    }

}
