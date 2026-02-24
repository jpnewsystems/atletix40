<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('rol')->default('usuario');
            $table->boolean('activo')->default(true);
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('rol');
            $table->dropColumn('activo');
        });
    }
};
