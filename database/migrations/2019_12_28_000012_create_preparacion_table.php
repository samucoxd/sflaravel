<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreparacionTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'preparacions';

    /**
     * Run the migrations.
     * @table preparacion
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpreparacion');
            $table->date('fecha')->nullable()->default(null);
            $table->time('hora')->nullable()->default(null);
            $table->integer('picking')->nullable($value = false);
            $table->integer('revision')->nullable($value = false);
            $table->integer('embalaje')->nullable($value = false);
            $table->integer('fallo')->nullable($value = false);
            $table->integer('idpedido')->nullable($value = false);
            $table->string('estado', 45)->nullable()->default(null);
            $table->timestamps();

            $table->unique(["picking", "revision", "embalaje", "fallo", "idpedido"], 'index44');

            $table->foreign('picking', 'fk_picking_personal_idx')
                ->references('idpersonalalmacen')->on('personalalmacens')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('revision', 'fk_revision_personal_idx')
                ->references('idpersonalalmacen')->on('personalalmacens')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            $table->foreign('embalaje', 'fk_embalaje_fallo_idx')
                ->references('idpersonalalmacen')->on('personalalmacens')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('fallo', 'fk_fallo_fallo_idx')
                ->references('idfallo')->on('fallos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idpedido', 'fk_preparacion_pedido_idx')
                ->references('idnota')->on('pedidos')
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
