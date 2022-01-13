<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Link extends Model
{
    use HasFactory;
    protected $table = 'links';
    protected $primaryKey = 'PRIMARY';
    public $timestamps = false;

    protected $attributes = [
        'protocol',
        'url',
        'simple_url'
    ];

    protected $fillable = [
        'protocol',
        'url',
        'simple_url'
    ];
}
