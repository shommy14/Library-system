<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    protected $connection = 'mongodb';

    public function products()
    {
        return $this->hasMany('App/Book');
    }
}
