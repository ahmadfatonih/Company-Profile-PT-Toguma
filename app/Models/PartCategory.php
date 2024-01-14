<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartCategory extends Model
{
    use HasFactory;

    protected $table = 'part_categories';

    protected $fillable =
    [
        'name', 'slug', 'status'
    ];

    public function part()
    {
        return $this->hasMany(Part::class);
    }
}
