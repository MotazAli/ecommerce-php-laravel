<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'city',
        'country_code',
        'location',
        'phone',
        'is_current',
        'is_deleted',
        'created_by',
        'updated_by',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
