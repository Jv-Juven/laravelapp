<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title'); // 标题
            $table->string('category'); // 电脑问题分类
            $table->string('contactName'); // 联系人
            $table->string('stdNum')->nullable(); // 学号
            $table->string('phone'); // 联系方式
            $table->string('address'); // 地址（宿舍号）
            $table->string('faultDate'); // 报修日期
            $table->string('appointmentTime'); // 预约时间
            $table->string('descriptions')->nullable(); // 问题描述
            $table->string('imagesArr')->default("a:0:{}")->nullable(); // 图片链接数组
            $table->unsignedInteger('fixWay')->default(0); // 维修方式
            $table->boolean('isReceived')->default(false); // 是否已接单
            $table->boolean('isDealed')->default(false); // 是否已处理
            $table->string('feedBack')->default('')->nullable(); // 意见反馈
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs');
    }
}
