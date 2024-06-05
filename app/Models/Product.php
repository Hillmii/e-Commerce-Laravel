<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function inventorys(){
        return $this->belongsTo(Inventory::class);
    }

    public function categorys(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function detailCategorys(){
        return $this->belongsTo(DetailCategory::class);
    }
}
