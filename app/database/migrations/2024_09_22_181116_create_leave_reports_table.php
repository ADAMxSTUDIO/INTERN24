<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveReportsTable extends Migration
{
    public function up()
    {
        Schema::create('leave_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('total_days_taken');
            $table->integer('remaining_days');
            $table->date('report_start_date');
            $table->date('report_end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leave_reports');
    }
}