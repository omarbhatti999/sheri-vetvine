<?php

namespace App\Models\Generals;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeZone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'offset',
        'diff_from_gtm',
        
    ];
}
