<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiecesTable extends Migration
{
    /**
     * Schema table name to migrate.
     *
     * @var string
     */
    public $tableName = 'pieces';

    /**
     * Run the migrations.
     *
     * @table pieces
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nompiece', 45);
            $table->string('img', 45);

            $table->char('uuid', 36);
            $table->integer('prestataires_id')->unsigned()->nullable();

            $table->index(['prestataires_id'], 'fk_pieces_prestataires1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();

            $table->foreign('prestataires_id', 'fk_pieces_prestataires1_idx')
                ->references('id')->on('prestataires')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
