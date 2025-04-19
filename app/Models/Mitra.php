<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mitra extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['slug', 'name', 'status', 'business_type'];

    protected $dates = ['deleted_at'];

    protected $hidden = [
        'id',
    ];
}
