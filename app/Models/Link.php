<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = 'links';
    protected $primaryKey = 'PRIMARY';
    public $timestamps = false;

    protected $appends = [
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
