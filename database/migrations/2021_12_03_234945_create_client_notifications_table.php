<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_notifications', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table->unsignedBigInteger('notification_id')->nullable();
            $table->foreign('client_id')
                ->references('id')
                ->on('notifications')
                ->onDelete('cascade');
            $table->foreign('notification_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
            // $table->date('start_time');
            // $table->integer('frequency');
            // $table->string('status');
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
        Schema::dropIfExists('client_notifications');
    }
}
