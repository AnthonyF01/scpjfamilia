<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Navegar usuarios',
                'slug' => 'users.index',
                'description' => 'Lista y navega todos los usuarios del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ver detalle de usuario',
                'slug' => 'users.show',
                'description' => 'Ve en detalle cada usuario del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Creación de usuario',
                'slug' => 'users.create',
                'description' => 'Podrá crear nuevos usuarios en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Edición de usuarios',
                'slug' => 'users.edit',
                'description' => 'Podría editar cualquier dato de un usuario del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Eliminar usuario',
                'slug' => 'users.destroy',
                'description' => 'Podría eliminar cualquier usuario del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Navegar roles',
                'slug' => 'roles.index',
                'description' => 'Lista y navega todos los roles del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Ver detalle de un rol',
                'slug' => 'roles.show',
                'description' => 'Ve en detalle cada rol del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Creación de roles',
                'slug' => 'roles.create',
                'description' => 'Podría crear nuevos roles en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Edición de roles',
                'slug' => 'roles.edit',
                'description' => 'Podría editar cualquier dato de un rol del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Eliminar roles',
                'slug' => 'roles.destroy',
                'description' => 'Podría eliminar cualquier rol del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Navegar centros de salud',
                'slug' => 'centrosalud.index',
                'description' => 'Lista y navega todos los centros de salud del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ver detalle de un centro de salud',
                'slug' => 'centrosalud.show',
                'description' => 'Ve en detalle cada centro de salud del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Creación de centros de salud',
                'slug' => 'centrosalud.create',
                'description' => 'Podría crear nuevos centros de salud en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Edición de centros de salud',
                'slug' => 'centrosalud.edit',
                'description' => 'Podría editar cualquier dato de un centro de salud del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Eliminar centros de salud',
                'slug' => 'centrosalud.destroy',
                'description' => 'Podría eliminar cualquier centro de salud del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Navegar comisarias',
                'slug' => 'comisaria.index',
                'description' => 'Lista y navega todos las comisarias del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Ver detalle de una comisaria',
                'slug' => 'comisaria.show',
                'description' => 'Ve en detalle cada comisaria del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Creación de comisarias',
                'slug' => 'comisaria.create',
                'description' => 'Podría crear nuevas comisarias en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Edición de comisarias',
                'slug' => 'comisaria.edit',
                'description' => 'Podría editar cualquier dato de una comisaria del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Eliminar comisarias',
                'slug' => 'comisaria.destroy',
                'description' => 'Podría eliminar cualquier comisaria del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Navegar instancias',
                'slug' => 'instancia.index',
                'description' => 'Lista y navega todos las instancias del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Ver detalle de una instancia',
                'slug' => 'instancia.show',
                'description' => 'Ve en detalle cada instancia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Creación de instancias',
                'slug' => 'instancia.create',
                'description' => 'Podría crear nuevas instancias en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Edición de instancias',
                'slug' => 'instancia.edit',
                'description' => 'Podría editar cualquier dato de una instancia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Eliminar instancias',
                'slug' => 'instancia.destroy',
                'description' => 'Podría eliminar cualquier instancia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Navegar motivos',
                'slug' => 'motivo.index',
                'description' => 'Lista y navega todos los motivos del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ver detalle de un motivo',
                'slug' => 'motivo.show',
                'description' => 'Ve en detalle cada motivo del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Creación de motivos',
                'slug' => 'motivo.create',
                'description' => 'Podría crear nuevos motivos en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Edición de motivos',
                'slug' => 'motivo.edit',
                'description' => 'Podría editar cualquier dato de un motivo del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Eliminar motivos',
                'slug' => 'motivo.destroy',
                'description' => 'Podría eliminar cualquier motivo del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Navegar documentos',
                'slug' => 'documento.index',
                'description' => 'Lista y navega todos los documentos del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Ver detalle de un documento',
                'slug' => 'documento.show',
                'description' => 'Ve en detalle cada documento del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Creación de documentos',
                'slug' => 'documento.create',
                'description' => 'Podría crear nuevos documentos en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Edición de documentos',
                'slug' => 'documento.edit',
                'description' => 'Podría editar cualquier dato de un documento del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Eliminar documentos',
                'slug' => 'documento.destroy',
                'description' => 'Podría eliminar cualquier documento del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Navegar tipos',
                'slug' => 'tipo.index',
                'description' => 'Lista y navega todos los tipos del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Ver detalle de un tipo',
                'slug' => 'tipo.show',
                'description' => 'Ve en detalle cada tipo del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Creación de tipos',
                'slug' => 'tipo.create',
                'description' => 'Podría crear nuevos tipos en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Edición de tipos',
                'slug' => 'tipo.edit',
                'description' => 'Podría editar cualquier dato de un tipo del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Eliminar tipos',
                'slug' => 'tipo.destroy',
                'description' => 'Podría eliminar cualquier tipo del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Navegar parentescos',
                'slug' => 'parentesco.index',
                'description' => 'Lista y navega todos los parentescos del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Ver detalle de un parentesco',
                'slug' => 'parentesco.show',
                'description' => 'Ve en detalle cada parentesco del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Creación de parentescos',
                'slug' => 'parentesco.create',
                'description' => 'Podría crear nuevos parentescos en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Edición de parentescos',
                'slug' => 'parentesco.edit',
                'description' => 'Podría editar cualquier dato de un parentesco del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Eliminar parentescos',
                'slug' => 'parentesco.destroy',
                'description' => 'Podría eliminar cualquier parentesco del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Navegar tipos de denuncia',
                'slug' => 'tdenuncia.index',
                'description' => 'Lista y navega todos los tipos de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Ver detalle de un tipo de denuncia',
                'slug' => 'tdenuncia.show',
                'description' => 'Ve en detalle cada tipo de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Creación de tipos de denuncia',
                'slug' => 'tdenuncia.create',
                'description' => 'Podría crear nuevos tipos de denuncia en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Edición de tipos de denuncia',
                'slug' => 'tdenuncia.edit',
                'description' => 'Podría editar cualquier dato de un tipo de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Eliminar tipos de denuncia',
                'slug' => 'tdenuncia.destroy',
                'description' => 'Podría eliminar cualquier tipo de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Navegar victimas',
                'slug' => 'victima.index',
                'description' => 'Lista y navega todas las victimas del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Ver detalle de un victima',
                'slug' => 'victima.show',
                'description' => 'Ve en detalle cada victima del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Creación de victimas',
                'slug' => 'victima.create',
                'description' => 'Podría crear nuevas victimas en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Edición de victimas',
                'slug' => 'victima.edit',
                'description' => 'Podría editar cualquier dato de una victima del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Eliminar victimas',
                'slug' => 'victima.destroy',
                'description' => 'Podría eliminar cualquier victima del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Navegar agresores',
                'slug' => 'agresor.index',
                'description' => 'Lista y navega todos los agresores del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Ver detalle de un agresor',
                'slug' => 'agresor.show',
                'description' => 'Ve en detalle cada agresor del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Creación de agresores',
                'slug' => 'agresor.create',
                'description' => 'Podría crear nuevos agresores en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Edición de agresores',
                'slug' => 'agresor.edit',
                'description' => 'Podría editar cualquier dato de un agresor del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Eliminar agresores',
                'slug' => 'agresor.destroy',
                'description' => 'Podría eliminar cualquier agresor del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Navegar denuncias',
                'slug' => 'denuncia.index',
                'description' => 'Lista y navega todas las denuncias del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Ver detalle de un denuncia',
                'slug' => 'denuncia.show',
                'description' => 'Ve en detalle cada denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Obtener informacion de las denuncias',
                'slug' => 'denuncia.getGData',
                'description' => 'Obtener informacion de las denuncias',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Generar reportes de denuncia',
                'slug' => 'denuncia.report',
                'description' => 'Generar reportes de denuncia',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Importar denuncias',
                'slug' => 'denuncia.import',
                'description' => 'Importar denuncias',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Importar CSV denuncias',
                'slug' => 'denuncia.importcsv',
                'description' => 'Importar CSV denuncias',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Generar reportes estadisticos de denuncia',
                'slug' => 'denuncia.estadistica',
                'description' => 'Generar reportes estadisticos de denuncia',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Creación de denuncias',
                'slug' => 'denuncia.create',
                'description' => 'Podría crear nuevas denuncias en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Edición de denuncias',
                'slug' => 'denuncia.edit',
                'description' => 'Podría editar cualquier dato de una denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Eliminar denuncias',
                'slug' => 'denuncia.destroy',
                'description' => 'Podría eliminar cualquier denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Ejecucion Medida proteccion',
                'slug' => 'denuncia.ejecucion',
                'description' => 'Informa de la ejecucion de la medida de proteccion',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Navegar notificaciones',
                'slug' => 'notification.index',
                'description' => 'Lista y navega todos los notificaciones del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Ver detalle de un notificacion',
                'slug' => 'notification.show',
                'description' => 'Ve en detalle cada notificacion del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Creación de notificaciones',
                'slug' => 'notification.create',
                'description' => 'Podría crear nuevos notificaciones en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Edición de notificaciones',
                'slug' => 'notification.edit',
                'description' => 'Podría editar cualquier dato de un notificacion del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Eliminar notificaciones',
                'slug' => 'notification.destroy',
                'description' => 'Podría eliminar cualquier notificacion del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Navegar tipos de denuncia',
                'slug' => 'tblmedida.index',
                'description' => 'Lista y navega todos los tipos de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Ver detalle de un tipo de denuncia',
                'slug' => 'tblmedida.show',
                'description' => 'Ve en detalle cada tipo de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Creación de tipos de denuncia',
                'slug' => 'tblmedida.create',
                'description' => 'Podría crear nuevos tipos de denuncia en el sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Edición de tipos de denuncia',
                'slug' => 'tblmedida.edit',
                'description' => 'Podría editar cualquier dato de un tipo de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Eliminar tipos de denuncia',
                'slug' => 'tblmedida.destroy',
                'description' => 'Podría eliminar cualquier tipo de denuncia del sistema',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Navegar documentos digitalizados',
                'slug' => 'ddocumento.index',
                'description' => 'Navegar documentos digitalizados',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ver detalle de un documento digitalizado',
                'slug' => 'ddocumento.show',
                'description' => 'Ver detalle de un documento digitalizado',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Crear documento digitalizado',
                'slug' => 'ddocumento.create',
                'description' => 'Crear documento digitalizado',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Editar documento digitalizado',
                'slug' => 'ddocumento.edit',
                'description' => 'Editar documento digitalizado',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Eliminar documento digitalizado',
                'slug' => 'ddocumento.destroy',
                'description' => 'Eliminar documento digitalizado',
                'created_at' => '2019-02-14 01:11:24',
                'updated_at' => '2019-02-14 01:11:24',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Descargar documento digitalizado',
                'slug' => 'ddocumento.download',
                'description' => 'Descargar documento digitalizado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Verificar documento digitalizado',
                'slug' => 'ddocumento.verificar',
                'description' => 'Verificar documento digitalizado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}