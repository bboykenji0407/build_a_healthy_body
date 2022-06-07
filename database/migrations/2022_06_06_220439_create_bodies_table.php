<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('body_fat_percentage');
            $table->integer('skeletal_muscle_percentage');
            $table->string('body_image')->nullable()->change();
            $table->timestamps();

            $table->foreign('user_id') //追加　user_idに外部キー制約をつけますよ。usersテーブルのidカラムを参照してそのカラムがなくなったらカスケード的に処理します。
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodies');
    }
}
