<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $fillable = [
        'author',
        'title',
        'post_image',
        'post_content',
        'post_date',
        'slug',
    ];
}
