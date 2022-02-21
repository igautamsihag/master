<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('order_status',['Cancelled','Completed','Requested',]);
            $table->text('from');
            $table->text('to');
            $table->integer('vehicles_requested');
            $table->char('title');
            $table->longText('description');
            $table->string('contact_person_name');
            $table->string('contact_person_number');
            $table->timestamp('order_time');

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
        Schema::dropIfExists('orders');
    }
}
