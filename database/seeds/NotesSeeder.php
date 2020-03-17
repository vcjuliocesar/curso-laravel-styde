<?php
use App\Note;
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
        Note::create([
          'title' => '¿Para qué sirve Composer?',
          'content'=>'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.',
        ]);

        Note::create([
          'title' => 'Instalación de Laravel',
          'content'=>File::get(__DIR__.'/notes/installation.html'),
        ]);

        Note::create([
          'title' => 'Rutas y JSON',
          'content'=>File::get(__DIR__.'/notes/routes_json.html'),
        ]);

        Note::create([
          'title' => 'Front Controller',
          'content'=>'Front Controller es un patrón de arquitectura donde un controlador maneja todas las solicitudes o peticiones a un sitio web.',
        ]);

        Note::create([
          'title' => 'Cambia el formato de parámetros dinámicos',
          'content'=>File::get(__DIR__.'/notes/dynamic_parameters.html'),
        ]);
    }
}
