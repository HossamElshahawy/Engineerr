<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Artical extends Model
{
    use HasFactory,Searchable;
    protected $fillable = [
        'title',
        'img',
        'description',
        'min_description',
        'user_id',
        'tag1',
        'tag2',
        'tag3',
        'category_id',
    ];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }
}
