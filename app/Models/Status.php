<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Status extends Model
{
    use SoftDeletes;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $dates = [
     'created_at',
     'updated_at',
     'deleted_at'


];

    //campos que podem ser viualizados/manipulados fora da classe
    protected $fillable = [

        'status'



    ];
}
