<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table
                ->unsignedBigInteger('category_id')
                ->after('text')
                ->nullable();

            $table
                ->foreign('category_id')
                ->references('id')
                ->on('lesson_categories')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('lessons_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
};
