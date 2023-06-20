<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TipoProduto extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_produtos';
    protected $primaryKey = 'id_tipo_produtos';
    protected $dates = [
     'created_at',
     'updated_at',
     'deleted_at'


];

    //campos que podem ser viualizados/manipulados fora da classe
    protected $fillable = [

        'tipo'



    ];
}
