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
            'description' => 'Roles',
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

        DB::table('menus')->insert([
            'title' => 'Bitácora',
            'description' => 'Registra la actividad de los usuarios.',
            'menu_parent' => 1,
            'order' => 6,
            'status' =>2,

        ]);




        ///menu padre  incio
            DB::table('menus')->insert([
            'title' => 'Configuración de la página ',
            'description' => 'Configuración visual de la página -cronograma,temporizador. --menu padre',
            'menu_parent' => 0,
            'order' => 7,
            'status' =>2,

            ]);


            DB::table('menus')->insert([
                'title' => 'Relog de cuenta regresiva',
                'description' => 'Agregar,editar relog de cuenta regresiva de la página.',
                'menu_parent' => 7,
                'order' => 8,
                'status' =>2,

            ]);





            DB::table('menus')->insert([
                'title' => 'Cronograma',
                'description' => 'Modificar el cronograma',
                'menu_parent' => 7,
                'order' => 9,
                'status' =>2,

            ]);

        ///menu fin



        //menu padre
        DB::table('menus')->insert([
            'title' => 'Cursos',
            'description' => 'Cursos menu padre',
            'menu_parent' => 0,
            'order' => 10,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Estadístitcas del curso',
            'description' => 'Datos importantes acerca de los cursos.',
            'menu_parent' => 10,
            'order' => 11,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Modificar curso',
            'description' => 'Editar,modificar,cancelar y borrar los cursos.',
            'menu_parent' => 10,
            'order' => 12,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Inscribirme a un curso',
            'description' => 'Incribirse a un curso',
            'menu_parent' => 10,
            'order' => 13,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Inscribirme un usuario a un curso',
            'description' => 'Incribirse a un usuario a un curso',
            'menu_parent' => 10,
            'order' => 14,
            'status' =>2,

        ]);

        //menu padre fin

        ///menu padre incio
        DB::table('menus')->insert([
            'title' => 'Conferencistas',
            'description' => '  Menu padre.',
            'menu_parent' => 0,
            'order' => 15,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Modificar conferencista',
            'description' => 'Editar,borrar o suspender conferencista.',
            'menu_parent' => 15,
            'order' => 16,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver conferencistas',
            'description' => 'Editar,borrar o suspender conferencista.',
            'menu_parent' => 15,
            'order' => 17,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Registrar conferencistas',
            'description' => 'Editar,borrar o suspender conferencista.',
            'menu_parent' => 15,
            'order' => 18,
            'status' =>2,

        ]);



        ///menu padre incio

        DB::table('menus')->insert([
            'title' => 'Souvenirs',
            'description' => 'Menu padre.',
            'menu_parent' => 0,
            'order' => 19,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Ver todos los souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 19,
            'order' => 20,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Comprar /Solicitar souvenir',
            'description' => 'Comprar souvenir.',
            'menu_parent' => 19,
            'order' => 21,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Modificar souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 19,
            'order' => 22,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Estadisticas de souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 19,
            'order' => 23,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Cobrar souvenir',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 19,
            'order' => 24,
            'status' =>2,

        ]);
        ///menu padre fin


        //menu padre
        DB::table('menus')->insert([
            'title' => 'Alumnos',
            'description' => 'Menu padre.',
            'menu_parent' => 0,
            'order' => 25,
            'status' =>2,

        ]);
        DB::table('menus')->insert([
            'title' => 'Modificar alumnos',
            'description' => 'Agregar,editar o borrar alumno.',
            'menu_parent' => 25,
            'order' => 26,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Ver todos alumnos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 25,
            'order' => 27,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Estadisticas alumnos',
            'description' => 'Agregar,editar o borrar suvenir.',
            'menu_parent' => 25,
            'order' => 28,
            'status' =>2,

        ]);

        //menu padre
        DB::table('menus')->insert([
            'title' => 'Patrocinadores',
            'description' => 'Menu padre .',
            'menu_parent' => 0,
            'order' => 5,
            'status' =>2,

        ]);

        DB::table('menus')->insert([
            'title' => 'Modificar patrocinadores',
            'description' => 'Agregar,editar o borrar patrocinador.',
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

        //menu fin
        /*
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

        */
        //menu fin









        /*

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

        */

        //menu padre fin




    }
}
