<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
          'title' => '¿Para qué sirve Composer?',
          'content'=>'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.',
        ]);

        DB::table('notes')->insert([
          'title' => 'Instalación de Laravel',
          'content'=>File::get(__DIR__.'/notes/installation.html'),
        ]);

        DB::table('notes')->insert([
          'title' => 'Rutas y JSON',
          'content'=>File::get(__DIR__.'/notes/routes_json.html'),
        ]);

        DB::table('notes')->insert([
          'title' => 'Front Controller',
          'content'=>'Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web.',
        ]);

        DB::table('notes')->insert([
          'title' => 'Cambia el formato de parámetros dinámicos',
          'content'=>File::get(__DIR__.'/notes/dynamic_parameters.html'),
        ]);
    }
}
