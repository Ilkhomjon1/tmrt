<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'title'
    ];

    public function categories(){
      return $this->belongsToMany(Category::class);
    }

    public function catalogs(){
      return Catalog::query()
                    ->whereHas('categories', function($q){
                      $q->whereIn('id', $this->categories()->pluck('id')->toArray());
                    })
                    ->get();
    }
}
