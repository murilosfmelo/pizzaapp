<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\{
    TipoProduto
};

class Produto extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    protected $dates = [
     'created_at',
     'updated_at',
     'deleted_at'


];

    //campos que podem ser viualizados/manipulados fora da classe
    protected $fillable = [
        'id_tipo_produto',
        'nome',
        'descricao',
        'foto',
        'observacoes'
    ];




    /**
     *-----------------------------------------------------
     *                  RELACIONAMENTOS
     * ----------------------------------------------------
     */


     public function tipo() : object {

            return $this->hasOne(TipoProduto::class,
                                    'id_tipo_produto',
                                    'id_tipo_produto');

     }


}
