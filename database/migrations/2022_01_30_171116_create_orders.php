<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
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
                $table->foreignId('user_id')->constrained('users');
                $table->string('shipping_name');
                $table->string('shipping_email');
                $table->string('shipping_phone');
                $table->string('country');
                $table->foreignId('state_id');
                $table->foreignId('lga_id');
                $table->unsignedInteger('post_code')->nullable();
                $table->text('notes')->nullable();
                $table->text('address');
                $table->enum('payment_status',['paid','pending']);
                $table->string('payment_type');
                $table->string('payment_method')->nullable();
                $table->string('transaction_id');
                $table->string('currency');
                $table->float('amount', 8, 2);
                $table->string('order_number');
                $table->string('invoice_number');
                $table->string('order_date');
                $table->string('order_month');
                $table->string('order_year');
                $table->string('confirmed_date')->nullable();
                $table->string('processing_date')->nullable();
                $table->string('picked_date')->nullable();
                $table->string('shipped_date')->nullable();
                $table->string('delivered_date')->nullable();
                $table->string('cancel_date')->nullable();
                $table->string('return_date')->nullable();
                $table->string('return_reason')->nullable();
                $table->string('status')->default('pending');
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
