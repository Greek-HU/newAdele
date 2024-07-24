<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class NailOpportunities extends Model
{
    protected $table = 'nail_opportunities';
    protected $fillable = [
        'type',
        'options',
        'price',
    ];
}

