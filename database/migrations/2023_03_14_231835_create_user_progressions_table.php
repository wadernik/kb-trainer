<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_progressions', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedSmallInteger('progression');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('cascade');

            $table->unique(['user_id', 'lesson_id']);
        });
    }

    public function down(): void
    {
        Schema::table('user_progressions', static function (Blueprint $table) {
            $table->dropForeign('user_progression_user_id_foreign');
            $table->dropForeign('user_progression_lesson_id_foreign');
            $table->dropUnique('user_progression_user_id_lesson_id_unique');
        });

        Schema::dropIfExists('user_progression');
    }
};
