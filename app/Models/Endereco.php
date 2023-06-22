<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'enderecos';
    protected $primaryKey = 'id_endereco';
    protected $dates = [
     'created_at',
     'updated_at',
     'deleted_at'


];

    //campos que podem ser viualizados/manipulados fora da classe
    protected $fillable = [
        'id_endereco',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'observacoes'
    ];




    /**
     *-----------------------------------------------------
     *                  RELACIONAMENTOS
     * ----------------------------------------------------
     */


    // public function tipo() : object {

    //        return $this->hasOne(TipoProduto::class,
   //                                 'id_tipo_produto',
    //                                'id_tipo_produto');

   //  }




}
