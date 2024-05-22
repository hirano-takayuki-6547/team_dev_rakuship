<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'condition_id',
        'name',
        'img_src',
        'description',
        'price',
    ];

    // usersとのリレーション(多対一)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // categoryとのリレーション(多対一)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // itemConditionとのリレーション

    public function itemCondition()
    {
        return $this->belongsTo(ItemCondition::class, 'condition_id');
    }

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id');
    }
}
