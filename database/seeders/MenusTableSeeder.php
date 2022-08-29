<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('menus')->insert([
            'title' => 'Complementos',
            'description' => 'Contiene las configuraciones grandes',
            'menu_parent' => 0,
            'order' => 1,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Roles',
            'description' => 'Configuración',
            'menu_parent' => 1,
            'order' => 2,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Menus',
            'description' => 'Menus',
            'menu_parent' => 1,
            'order' => 3,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Usuarios',
            'description' => 'Usuarios',
            'menu_parent' => 1,
            'order' => 4,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Configuración general',
            'description' => 'Configuración de logo, titulo de la página y etc.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);


        /*
        DB::table('menus')->insert([
            'title' => 'Bitácora',
            'description' => 'Registra la actividad de los usuarios.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        ///menu padre  incio
            DB::table('menus')->insert([
            'title' => 'Configuración general la página',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

            ]);


             DB::table('menus')->insert([
                'title' => 'Relog de cuenta regresiva',
                'description' => 'Agregar,editar o borrar suvenir.',
                'menu_parent' => 1,
                'order' => 5,
                'status' =>2,

            ]);





            DB::table('menus')->insert([
                'title' => 'Cronograma',
                'description' => 'Agregar,editar o borrar suvenir.',
                'menu_parent' => 1,
                'order' => 5,
                'status' =>2,

            ]);

        ///menu fin



        //menu padre
        DB::table('menus')->insert([
            'title' => 'Cursos',
            'description' => 'Cursos.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Estadístitcas del curso',
            'description' => 'Cuantos alumnos hay incritos a un curso.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Modificar curso',
            'description' => 'Editar,modificar,cancelar y borrar los cursos.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Inscribirse a un curso',
            'description' => 'Incribirse a un curso',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        //menu padre fin

        ///menu padre incio
        DB::table('menus')->insert([
            'title' => 'Conferencistas',
            'description' => 'Conferencistas.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Modificar conferencistas',
            'description' => 'Editar,borrar o suspender conferencista.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver conferencistas',
            'description' => 'Editar,borrar o suspender conferencista.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);



        ///menu padre incio

        //menu padre incio
        DB::table('menus')->insert([
            'title' => 'Souvenirs',
            'description' => 'Agregar,editar o borrar souvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Ver todos los souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Solicitar un souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Modificar souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Estadisticas de souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Cobrar souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        ///menu padre fin


        //menu padre
        DB::table('menus')->insert([
            'title' => 'Alumnos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Modificar alumnos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver todos alumnos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Estadisticas alumnos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);


        //menu fin

         //menu padre
         DB::table('menus')->insert([
            'title' => 'Extranjeros',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Modificar extranjero',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver todos los extranjeros',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Estadisticas extranjeros',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);


        //menu fin



        //menu padre
        DB::table('menus')->insert([
            'title' => 'Patrocinadores',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Modificar patrocinadores',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver todos los patrocinadores',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        //menu fin






        //menu padre
        DB::table('menus')->insert([
            'title' => 'Pagos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver todos los pagos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Moficar pago',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Estadisticas pagos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);
        //menu fin


        //menu padre incio
        DB::table('menus')->insert([
            'title' => 'Ticket o Gafete',
            'description' => '',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Verificar gafete',
            'description' => 'Escaneara el código QR del gafete',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Generar mi  gafete',
            'description' => 'Escaneara el código QR del gafete',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Generar uno o más gafetes',
            'description' => 'Escaneara el código QR del gafete',
            'menu_parent' => 1,
            'order' => 5,
            'status' =>2,

        ]);



        //menu padre fin
        */



    }
}
