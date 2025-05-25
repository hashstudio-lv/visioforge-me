<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];

    public array $translatedAttributes = ['slug', 'title', 'content', 'meta_title', 'meta_keywords', 'meta_description'];
}
