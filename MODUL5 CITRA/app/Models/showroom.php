<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showroom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'owner',
        'brand',
        'purchase_order',
        'description',
        'image',
        'status',
    ];


}
