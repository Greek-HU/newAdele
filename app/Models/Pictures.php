<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $table = 'pictures';
    protected $fillable = [
        'title',
        'imgPlace',
        'uploadDate',
    ];
}
