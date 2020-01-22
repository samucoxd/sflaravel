<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pedidos';

    /**
     * Run the migrations.
     * @table pedido
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idpedido');
            $table->integer('idnota')->nullable($value = false);
            $table->integer('idfac')->nullable($value = false);
            $table->date('fecha')->nullable()->default(null);
            $table->integer('cliente')->nullable($value = false);
            $table->integer('vendedor')->nullable($value = false);
            $table->timestamps();

            $table->unique(["idnota", "idfac", "cliente", "vendedor"], 'index2');

            $table->foreign('cliente', 'fk_pedido_cliente_idx')
                ->references('idcliente')->on('clientes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('vendedor', 'fk_pedido_vendedor_idx')
                ->references('idvendedor')->on('vendedors')
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
