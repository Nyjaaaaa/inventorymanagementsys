<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    public function categories(){
        
        return $this->belongsTo(Category::class);
    }

    public function users(){
        
        return $this->belongsTo(User::class);
    }
}