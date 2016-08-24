<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstabelecimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estabelecimentos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->integer('tipo_estabelecimento_id');
			$table->integer('endereco_id');
			$table->integer('telefone_id');
			$table->string('descricao');
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
		Schema::drop('estabelecimentos');
	}

}
