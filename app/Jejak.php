<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jejak extends Model
{
    protected $fillable = ["judul", "deskripsi", "gambar"];
}
