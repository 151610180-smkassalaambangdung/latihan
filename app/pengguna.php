<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillebel = ['nama_lengkap','alamat','no_hp'];
    protected $visible = ['nama_lengkap','alamat','no_hp'];
    public $timestamps =true;
}
