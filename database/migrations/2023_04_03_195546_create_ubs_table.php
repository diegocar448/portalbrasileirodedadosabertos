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
        Schema::create('ubs', function (Blueprint $table) {
            $table->id();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->string('complemento')->nullable();
            $table->string('data_atualizacao')->nullable();
            $table->string('endereco')->nullable();
            $table->string('georef_location')->nullable();
            $table->string('ibge')->nullable();
            $table->string('id_equipamento')->nullable();
            $table->string('nome')->nullable();
            $table->string('numero')->nullable();
            $table->string('referencia')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('telefone')->nullable();
            $table->string('uf')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubs');
    }
};
