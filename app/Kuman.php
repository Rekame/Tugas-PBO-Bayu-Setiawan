<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuman extends Model
{
    protected $table = 'Kuman';
    protected $fillable = ['nama','alamat'];
}
