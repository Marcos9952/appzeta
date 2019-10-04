<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos que rellenamos en la base de datos rol
        $rol = [
            'adminstrador',
            'empleado',
            'supervisor',
            'apoyo',
        ];
        
        foreach ($rol as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:m:s')
            ]);
        }      
        
    }

    
}
