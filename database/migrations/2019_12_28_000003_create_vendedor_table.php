<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'vendedors';

    /**
     * Run the migrations.
     * @table vendedor
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('idvendedor');
            $table->string('nombre', 45)->nullable()->default(null);
            $table->timestamps();

            $table->primary('idvendedor');
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
