<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //Apuntamos a la tabla menu
    protected $table = 'menu';

    //los datos que queremos mostrar
    protected $fillable = ['nombre','url','icono'];

    //los datos que queremos que no se muestren
    protected $guarded = ['id'];

}
