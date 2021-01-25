<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = ["nama", "nim", "fakultas", "handphone", "lahir", "tahun","foto"];

}
