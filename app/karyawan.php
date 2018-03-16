<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable =['nama','email','password','cover','alamat'];
}
