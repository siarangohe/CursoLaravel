<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
                    /*
                     * Se esta creando cada una de las columnas de la tabla usuario (mirar notas)
                     */
                     $table->increments('id');
                     $table->string('nombre');
                     $table->string('email');
                     $table->string('password');
                     $table->timestamps();
                     $table->rememberToken();
		});
                
                Schema::create('publicacion', function(Blueprint $table)
		{
                    /*
                     * Se esta creando cada una de las columnas de la tabla publicacion (mirar notas)
                     */
                     $table->increments('id');
                     $table->text('publicacion');
                     $table->boolean('tipo');
                     $table->integer('id_usuario')->unsigned();
                     $table->integer('receptor')->unsigned();
                     $table->integer('id_padre')->unsigned()->nullable();
                     $table->foreign('id_usuario')->references('id')->on('usuario');
                     $table->foreign('receptor')->references('id')->on('usuario');
                     $table->foreign('id_padre')->references('id')->on('publicacion');
                     $table->timestamps();
		});
                
                Schema::create('me_gusta', function(Blueprint $table)
		{
                    /*
                     * Se esta creando cada una de las columnas de la tabla me_gusta(mirar notas)
                     */
                     $table->increments('id');
                     $table->timestamps();
                     $table->integer('id_usuario')->unsigned();;
                     $table->foreign('id_usuario')->references('id')->on('usuario');
                     $table->integer('id_publicacion')->unsigned();;
                     $table->foreign('id_publicacion')->references('id')->on('publicacion');
		});
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Simon',
                            'email' => 'saimon002@hotmail.com',
                            'password' => Hash::make('12345')
                        ]);
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Camilo',
                            'email' => 'jcamilo8a01@hotmail.com',
                            'password' => Hash::make('54321')
                        ]);
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Sebastian',
                            'email' => 'arango8888@hotmail.com',
                            'password' => Hash::make('67890')
                        ]);
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Dabeiba',
                            'email' => 'dabe1947@hotmail.com',
                            'password' => Hash::make('09876')
                        ]);
                
                DB::table('usuario')
                        ->insert([
                            'nombre' => 'Ricardo',
                            'email' => 'rmesaf@hotmail.com',
                            'password' => Hash::make('23456')
                        ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('me_gusta');
            Schema::drop('publicacion');
            Schema::drop('usuario');
	}

}
