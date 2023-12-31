<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'content']; //変更可にする

    public function category()
    {
        return $this->belongsTo(Category::class);
        //リレーション設定、多対1（todos多、category1の場合belongsTo,その他hasMany(1対多),hasOne(1対1)）
    }

    public function scopeCategorySearch($query, $category_id)
    {
        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('content', 'like', '%' . $keyword . '%');
        }
    }
}
