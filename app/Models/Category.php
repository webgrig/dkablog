<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . Carbon::now()->format('dmyHi'), '-');
    }

    // Get children category
    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }
    // Polymorphic relation with articles
    public function articles(){
        return $this->morphedByMany(Article::class, 'categoryable');
    }

    public function scopeLastCategories($query, $amount){
        return $query->orderBy('created_at', 'desc')->take($amount);
    }

}
