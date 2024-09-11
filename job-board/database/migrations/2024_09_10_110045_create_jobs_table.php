<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        // تحقق من وجود الجدول قبل محاولة إنشائه
        if (!Schema::hasTable('jobs')) {
            Schema::create('jobs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('user_id');
                $table->string('title');
                $table->text('description');
                $table->text('requirements');
                $table->text('benefits')->nullable();
                $table->decimal('salary_min', 10, 2)->nullable();
                $table->decimal('salary_max', 10, 2)->nullable();
                $table->string('location');
                $table->enum('work_type', ['remote', 'on-site']);
                $table->date('application_deadline');
                $table->timestamps();

                // إضافة قيد المفتاح الخارجي
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
