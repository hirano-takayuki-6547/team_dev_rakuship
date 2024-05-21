<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
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

    // categoriesとのリレーション(多対一)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // itemConditionsとのリレーション
    public function itemConditions()
    {
        return $this->belongsTo(ItemCondition::class);
    }
}
