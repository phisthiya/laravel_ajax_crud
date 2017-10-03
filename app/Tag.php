<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //membuka field agar data dapat disimpan pada tabel tag
    protected $fillable = array('tagname','slug');
}
