<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // declaramos las tabla que queremos enviar datos de relleno desde el mimo farmeword

        $this->truncateTablas([
            'rol',
            'permiso',
        ]);

        //llamado de clases sender (seeds)
        $this->call(TablaRolSeeder::class); 
        $this->call(TablaPermisoSeeder::class); 
    }

    //truncamos a las tablas para poder llenarles la informacion
    protected function truncateTablas(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tablas as $tablas) {

            DB::table($tablas)->truncate();

        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
