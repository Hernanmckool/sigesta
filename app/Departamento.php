<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table="departamentos";

    protected $fillable= ['departamento'];
}
