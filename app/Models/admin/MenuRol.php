<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class MenuRol extends Model
{
    //inbocamos a la tabla menu_rol
    protected $table = 'menu_rol';
    
    //si no utilisamos los campos timestamps le pasamos los datos en falso
    public $timestamps =false;
}
