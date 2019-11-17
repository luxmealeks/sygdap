<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatairesTable extends Migration
{
    /**
     * Schema table name to migrate.
     *
     * @var string
     */
    public $tableName = 'prestataires';

    /**
     * Run the migrations.
     *
     * @table prestataires
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ninea', 45);
            $table->integer('bp')->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('fax')->nullable();
            $table->string('email', 45)->nullable();
            $table->string('registreCommerce', 45);
            $table->char('uuid', 36);
            $table->string('raisonSociale', 100);
            $table->string('adresse', 200)->nullable();
            $table->integer('types_id')->unsigned()->nullable();
            $table->date('dateAgrement');
            // $table->string('piece');

            $table->index(['types_id'], 'fk_prestataires_types1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();

            $table->foreign('types_id', 'fk_prestataires_types1_idx')
                ->references('id')->on('types')
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
