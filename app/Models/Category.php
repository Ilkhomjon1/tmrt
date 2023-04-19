<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
      'title'
    ];

    public function catalogs(){
      return $this->belongsToMany(Catalog::class, 'catalog_category');
    }

    public function products(){
      return $this->belongsToMany(Product::class);
    }
}
