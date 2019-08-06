<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('sobrenome', 200);
            $table->string('email', 100)->unique();
            $table->string('password', 200);
            $table->integer('cep');
            $table->string('endereco', 200);
            $table->integer('numero');
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100);
            $table->date('data_nascimento');
            $table->string('estado', 100);
            $table->string('cidade', 100);
            $table->tinyInteger('nivel_user');
            $table->string('email_verified_at')->nullable();
            $table->string('telefone', 15);
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
