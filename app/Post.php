<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable= [
    'title', 'slug', 'category_id', 'body', 'image', 'status', 'story', 'instagram'
];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 1)->get();
    }

    public function scopeUnpublished($query)
    {
        return $query->where('status', 2)->get();
    }

}
