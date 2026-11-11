<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPostCategory extends Model
{
//    use HasFactory;
    use SoftDeletes;
    protected $table = 'blog_post_cats';
    public function category()
    {
        return $this->hasOne('App\Models\BlogCategories','catID','catID');
    }
    public function blog()
    {
        return $this->hasOne('App\Models\BlogPostSeo','postID','postID');
    }
}
