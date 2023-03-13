<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function user(){
        
        return $this->belongsTo(User::class);
    }

    public function product(){
        
        return $this->hasMany(Product::class);
    }
}
