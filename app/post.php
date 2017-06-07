<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   protected $table = 'post';
    protected $fillebel = ['title','content'];
    protected $visible = ['title','content'];
    public $timestamps =true;
}
