<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model

{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];
 public function user()
    { 
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function products()
    { 
        return $this->hasMany(Products::class);
    }

}
