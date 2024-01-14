<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialCategory extends Model
{
    use HasFactory;

    protected $table = 'material_categories';

    protected $fillable =
    [
        'name', 'slug', 'status'
    ];

    public function material()
    {
        return $this->hasMany(Material::class);
    }
}
