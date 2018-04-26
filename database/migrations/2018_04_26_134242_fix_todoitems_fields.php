<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixTodoitemsFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('todo_items', function (Blueprint $table) {
            $table->text('content')->change();
            $table->renameColumn('done', 'is_done');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todoitems', function (Blueprint $table) {
            $table->string('content')->change();
            $table->renameColumn('is_done', 'done');
        });
    }
}
