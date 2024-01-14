<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialGallery extends Model
{
    use HasFactory;

    protected $table = 'material_galleries';

    protected $fillable =
    [
        'material_id', 'photo', 'status'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    // accessor untuk mengganti url photo di API
    public function getPhotoAttribute($value)
    {
        return url('storage/app/public/' . $value);
    }

}
