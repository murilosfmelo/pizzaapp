<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tamanho extends Model
{
    use SoftDeletes;

    protected $table = 'tamanhos';
    protected $primaryKey = 'id_tamanho';
    protected $dates = [
     'created_at',
     'updated_at',
     'deleted_at'


];

    //campos que podem ser viualizados/manipulados fora da classe
    protected $fillable = [

        'tamanho'



    ];
}