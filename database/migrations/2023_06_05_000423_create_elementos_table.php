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
        Schema::create('elementos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Id_categorias')->unsigned();
            $table->string('Referencias');
            $table->string('Nombres');
            $table->integer('Cantidad');
            $table->decimal('Valor', 8, 2);
            $table->string('Estado');
            $table->string('Lugar');
            $table->date('Fecha_reg');
            $table->time('Hora_reg');
            $table->string('Observaciones', 500);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('Id_categorias')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elementos');
    }
};
