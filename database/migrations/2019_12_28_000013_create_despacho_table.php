<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespachoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'despachos';

    /**
     * Run the migrations.
     * @table despacho
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('iddespacho');
            $table->date('fecha')->nullable()->default(null);
            $table->time('hora')->nullable()->default(null);
            $table->integer('iddespachador')->nullable($value = false);
            $table->integer('idpedido')->nullable($value = false);
            $table->string('estado', 45)->nullable()->default(null);
            $table->timestamps();

            $table->unique(["iddespachador", "idpedido"], 'index55');

            $table->foreign('idpedido', 'fk_despacho_pedido_idx')
                ->references('idnota')->on('pedidos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('iddespachador', 'fk_despacho_despachador_idx')
                ->references('iddespachador')->on('despachadors')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
