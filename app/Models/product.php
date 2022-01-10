<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'ProductName',
        'ProductDescription',
        'category_id',
        'image',
        'price'

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function images()
    {
        return $this->hasMany(image::class);
    }
}
