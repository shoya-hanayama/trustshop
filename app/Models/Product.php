<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [  // 'public' を 'protected' に変更
    'name',
    'description',
    'price',
    'stock', // 在庫数カラムを追加
  ];
  
  public function shop()
  {
    return $this->belongsTo(Shop::class);
  }
}
