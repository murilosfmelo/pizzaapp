<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoPedido extends Model
{
    use SoftDeletes;

    protected $table = 'tipos_pedidos';
    protected $primaryKey = 'id_tipo_pedidos';
    protected $dates = [
     'created_at',
     'updated_at',
     'deleted_at'


];

    //campos que podem ser viualizados/manipulados fora da classe
    protected $fillable = [

        'tipo_pedido'



    ];

}
