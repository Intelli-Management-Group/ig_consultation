<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPostSeo extends Model
{
//    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'postID';
    protected $table = 'blog_post_seos';
}
