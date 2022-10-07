<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];

    public function storeCategories(){
        $this->hasMany(StoreCategory::class);
    }
}
