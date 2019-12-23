<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table= "borrows";
    protected $primaryKey = 'issueId';
    protected $fillable = ['dueDate', 'bookId', 'userId','returned'];

    public function member()
    {
        return $this->belongsTo('App\User', 'userId' );
    }
    public function book()
    {
        return $this->belongsTo('App\Book', 'bookId');
    }
}
