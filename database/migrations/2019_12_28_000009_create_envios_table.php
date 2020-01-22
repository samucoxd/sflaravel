<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnviosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'envioss';

    /**
     * Run the migrations.
     * @table envioss
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idenvios');
            $table->date('fecha')->nullable()->default(null);
            $table->time('hora')->nullable()->default(null);
            $table->integer('idtransporte')->nullable($value = false);
            $table->integer('iddestino')->nullable($value = false);
            $table->string('guia', 45)->nullable()->default(null);
            $table->integer('idpedido')->nullable($value = false);
            $table->timestamps();

            $table->unique(["idtransporte","iddestino","idpedido"], 'index3');

            $table->foreign('idtransporte', 'fk_envios_tran_idx')
                ->references('idtransporte')->on('transportes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('iddestino', 'fk_envios_destino_idx')
                ->references('iddestino')->on('destinos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('idpedido', 'fk_envios_pedido_idx')
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
