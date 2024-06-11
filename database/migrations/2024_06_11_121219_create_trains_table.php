<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Create TABLE 'trains' (
     *              'id' UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
     *              'azienda' VARCHAR(255) NULL,
     *              'stazione_arrivo' TIME NOT NULL,
     *              'orario_partenza' TIME NOT NULL,
     *              'codice_treno' VARCHAR(255) NOT NULL,
     *              'numero_carrozze' UNSIGNET TINYINT NOT NULL,
     *              'in_orario' TINYINT NOT NULL,
     *              'cancellato' TINYINT NOT NULL
     * )
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda')->nullable();
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno');
            $table->unsignedTinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
