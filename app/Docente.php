<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = ['nome', 'nivel'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'docentes';
}
