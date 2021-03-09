<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'description_short', 'description', 'image', 'image_show', 'meta_title', 'meta_description', 'meta_keyword', 'meta_keyword', 'published', 'created_by', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'), '-');
    }

    // Polymorphic relation with categories
    public function categories(){
        return $this->morphToMany(Category::class, 'categoryable');
    }

    public function scopeLastArticles($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
