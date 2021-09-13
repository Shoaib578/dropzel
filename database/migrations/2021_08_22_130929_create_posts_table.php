<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('body');
            $table->text('product_image1')->nullable();
            $table->text('product_image2')->nullable();
            $table->text('product_image3')->nullable();
            $table->text('product_image4')->nullable();
            $table->text('product_image5')->nullable();

           

            $table->text('link');
            $table->text('category');
            $table->text('selling_price');
            $table->text('product_cost');
            $table->text('profit_margin');
            $table->integer('saturation');

            
            $table->text('influencer1')->nullable();
            $table->text('influencer2')->nullable();
            $table->text('influencer3')->nullable();
            $table->text('influencer4')->nullable();
            $table->text('influencer5')->nullable();
            $table->text('influencer6')->nullable();
            $table->text('influencer7')->nullable();
            $table->text('influencer8')->nullable();
            $table->text('influencer9')->nullable();

            $table->text('influencer1_link')->nullable();
            $table->text('influencer2_link')->nullable();
            $table->text('influencer3_link')->nullable();
            $table->text('influencer4_link')->nullable();
            $table->text('influencer5_link')->nullable();
            $table->text('influencer6_link')->nullable();
            $table->text('influencer7_link')->nullable();
            $table->text('influencer8_link')->nullable();

            $table->text('influencer9_link')->nullable();


            $table->text('influencer1_image')->nullable();
            $table->text('influencer2_image')->nullable();
            $table->text('influencer3_image')->nullable();
            $table->text('influencer4_image')->nullable();
            $table->text('influencer5_image')->nullable();
            $table->text('influencer6_image')->nullable();
            $table->text('influencer7_image')->nullable();
            $table->text('influencer8_image')->nullable();
            $table->text('influencer9_image')->nullable();
            

            $table->integer('cpa');
            $table->integer('net');
            $table->integer('orders');
            $table->integer('votes');
            $table->integer('reviews');
            $table->integer('rating');
            $table->integer('likes');
            $table->integer('comments');
            $table->integer('shares');
            $table->integer('reactions');

            $table->text('source');


            
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
        Schema::dropIfExists('posts');
    }
}
