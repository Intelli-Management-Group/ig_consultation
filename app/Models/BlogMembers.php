<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogMembers extends Model
{
//    use HasFactory;
    use SoftDeletes;
    protected $table = 'blog_members';
    protected $primaryKey = 'memberID';
}
