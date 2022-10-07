<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by'
    ];


    public function store(){
        return $this->belongsTo(Store::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }


}
