<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table= "borrows";
    protected $primaryKey = 'issueId';
    protected $fillable = ['issueDate', 'dueDate', 'bookId', 'userId','returned'];
    public $timestamps = false;

    public function member()
    {
        return $this->belongsTo('App\User', 'userId' );
    }
    public function book()
    {
        return $this->belongsTo('App\Book', 'bookId');
    }
}
