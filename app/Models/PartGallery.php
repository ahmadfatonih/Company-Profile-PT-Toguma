<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartGallery extends Model
{
    use HasFactory;

    protected $table = 'part_galleries';

    protected $fillable =
    [
        'part_id', 'photo', 'status'
    ];

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    // accessor untuk mengganti url photo di API
    public function getPhotoAttribute($value)
    {
        return url('storage/app/public/' . $value);
    }
}
