<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lessons', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedSmallInteger('required_progression')->nullable();
            $table->string('code')->nullable();
            $table->boolean('active')->default(true);
            $table->json('lesson')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                ->references('id')
                ->on('lesson_categories')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('lessons', static function (Blueprint $table) {
            $table->dropForeign('lessons_category_id_foreign');
        });

        Schema::dropIfExists('lessons');
    }
};
