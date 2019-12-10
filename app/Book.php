<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['title','published','category'];
    protected $dates = ['created_at','updated_at'];
    protected $table = 'books';

    public function book()
    {
        return $this->hasOne('App\Borrow', 'bookId');
    }
}
