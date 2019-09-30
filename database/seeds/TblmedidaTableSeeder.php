<?php

use Illuminate\Database\Seeder;

class TblmedidaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblmedida')->delete();
        
        \DB::table('tblmedida')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Retiro del agresor del domicilio',
                'sigla' => 'RAD',
                'descripcion' => NULL,
                'created_at' => '2019-02-14 01:03:01',
                'updated_at' => '2019-03-06 16:44:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Impedimento de acercamiento o proximidad a la víctima',
                'sigla' => 'IPV',
                'descripcion' => NULL,
                'created_at' => '2019-02-14 01:03:05',
                'updated_at' => '2019-03-06 16:44:30',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Prohibición de comunicación con la víctima',
                'sigla' => 'PCV',
                'descripcion' => NULL,
                'created_at' => '2019-02-14 01:03:14',
                'updated_at' => '2019-03-06 16:44:37',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Prohibición del derecho de tenencia y porte de armas para el agresor',
                'sigla' => 'PPA',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:44:45',
                'updated_at' => '2019-03-06 16:44:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Inventario de bienes',
                'sigla' => 'IBN',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:44:59',
                'updated_at' => '2019-03-06 16:44:59',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Asignación económica de emergencia',
                'sigla' => 'AEE',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:45:03',
                'updated_at' => '2019-03-06 16:45:03',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Prohibición de disponer de los bienes muebles o inmuebles comunes',
                'sigla' => 'PDM',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:45:15',
                'updated_at' => '2019-03-06 16:45:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Prohibición a la persona denunciada de retirar del cuidado del grupo familiar a los niños, niñas, adolescentes u otras personas en situación de vulnerabilidad',
                'sigla' => 'PRN',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:45:41',
                'updated_at' => '2019-03-06 16:45:41',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Tratamiento reeducativo o terapéutico para el agresor',
                'sigla' => 'TTA',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:45:55',
                'updated_at' => '2019-03-06 16:45:55',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Tratamiento psicológico para la víctima',
                'sigla' => 'TPV',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:46:04',
                'updated_at' => '2019-03-06 16:46:04',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Albergue de la víctima en un establecimiento en el que se garantice su seguridad',
                'sigla' => 'AVE',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:46:10',
                'updated_at' => '2019-03-06 16:46:10',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Cualquier otra medida de protección requerida',
                'sigla' => 'CMP',
                'descripcion' => NULL,
                'created_at' => '2019-03-06 16:46:18',
                'updated_at' => '2019-03-06 16:46:18',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'No dictar medidas de protección',
                'sigla' => 'NMP',
                'descripcion' => NULL,
                'created_at' => '2019-05-29 17:15:52',
                'updated_at' => '2019-06-15 21:14:12',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Cese de violencia',
                'sigla' => NULL,
                'descripcion' => NULL,
                'created_at' => '2019-07-06 13:25:58',
                'updated_at' => '2019-07-06 13:25:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}