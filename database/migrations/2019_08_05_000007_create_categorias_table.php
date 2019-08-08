<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'categorias';

    /**
     * Run the migrations.
     * @table categorias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name',200);
            $table->string('sobrenome',200);
            $table->string('email', 100)->unique();
            $table->string('password',200);
            $table->integer('cep');
            $table->string('endereco', 200)->nullable();
            $table->string('numero',45);
            $table->string('complemento', 100)->nullable();
            $table->string('bairro',100);
            $table->date('data_nascimento');
            $table->string('estado',100);
            $table->string('cidade',100);
            $table->tinyInteger('nivel_user');
            $table->string('email_verified_at',45)->nullable();
            $table->string('telefone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}