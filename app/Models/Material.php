<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';

    protected $fillable =
    [
        'material_category_id ', 'name', 'slug', 'meta_description', 'meta_keyword',
        'short_description', 'long_description', 'status'
    ];

    public function materialCategory()
    {
        return $this->belongsTo(MaterialCategory::class);
    }

    public function materialGallery()
    {
        return $this->hasMany(MaterialGallery::class);
        // return $this->hasMany(MaterialGallery::class, 'id');
    }
}
