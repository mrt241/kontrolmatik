<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';

    use Translatable;
    protected $translatable = ['title', 'body'];
}
}
