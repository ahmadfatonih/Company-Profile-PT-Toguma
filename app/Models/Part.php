<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $table = 'parts';

    protected $fillable =
    [
        'part_category_id ', 'name', 'slug', 'meta_description', 'meta_keyword',
        'short_description', 'long_description', 'status'
    ];

    public function partCategory()
    {
        return $this->belongsTo(PartCategory::class);
    }

    public function partGallery()
    {
        return $this->hasMany(PartGallery::class);
        // return $this->hasMany(PartGallery::class, 'id');
    }
}
