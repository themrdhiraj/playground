<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'trac_no',
        'trac_model',
        'trac_fuel',
        'trac_dist',
    ];
}
