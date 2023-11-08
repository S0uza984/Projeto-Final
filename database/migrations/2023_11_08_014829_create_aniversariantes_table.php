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
        Schema::create('aniversariantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Coluna para o nome do aniversariante
            $table->integer('idade'); // Coluna para a idade a ser comemorada
            $table->id('pacote_comidas'); // Coluna para o pacote de comidas escolhido
            $table->integer('quantidade_convidados'); // Coluna para a quantidade estimada de convidados
            $table->dateTime('data_hora_reserva'); // Para representar a data e hora da reserva.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aniversariantes');
    }
};
