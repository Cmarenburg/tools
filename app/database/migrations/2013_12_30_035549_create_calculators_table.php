<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalculatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calculators', function(Blueprint $table) {
			$table->increments('id');
			$table->integer;amount_fed_per_day_per_animal('number_of_animals')->integer;units_collected_per_day()->integer;price_units_sold_for()->integer;();
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
		Schema::drop('calculators');
	}

}
