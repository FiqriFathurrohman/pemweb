<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'author',
        'robots',
        'canonical_url',
        'og_image',
    ];
}
