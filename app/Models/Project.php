<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\helper;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'slug', 'body', 'image',
    ];
    public function setSlugAttribute($value)
    {
        $slug = helper::slug($value);
        $uniqueslug = helper::uniqueSlug($slug, 'projects');
        $this->attributes['slug'] = $uniqueslug;
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
