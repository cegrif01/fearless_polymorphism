<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('user_id');
			$table->integer('transaction_type_id');
			$table->integer('account_id');
			$table->decimal('amount',10,2);
			$table->string('description');
			$table->string('check_number')->nullable();
			$table->string('payee')->nullable();
			$table->date('purchase_date')->nullable();
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
		Schema::drop('transactions');
	}

}
