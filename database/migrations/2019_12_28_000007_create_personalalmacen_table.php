<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalalmacenTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'personalalmacens';

    /**
     * Run the migrations.
     * @table personalalmacen
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('idpersonalalmacen')->autoIncrement();
            $table->string('nombre', 45)->nullable()->default(null);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
