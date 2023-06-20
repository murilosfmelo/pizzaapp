<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id_produto');
            $table->integer('id_tipo_produto');
            $table->string('nome');
                 //campos não obrigatórios: nullable();
            $table->text('descricao')->nullable();
            $table->string('foto','45')->nullable();
            $table->text('observacoes')->nullable();
                // /campos não obrigatórios: nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
