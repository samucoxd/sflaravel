<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespachadorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'despachadors';

    /**
     * Run the migrations.
     * @table despachador
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('iddespachador')->autoIncrement();
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
