<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);

        Permission::create([
            'name'          => 'Creación de usuario',
            'slug'          => 'users.create',
            'description'   => 'Podrá crear nuevos usuarios en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        // Centros de Salud
        Permission::create([
            'name'          => 'Navegar centros de salud',
            'slug'          => 'centrosalud.index',
            'description'   => 'Lista y navega todos los centros de salud del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un centro de salud',
            'slug'          => 'centrosalud.show',
            'description'   => 'Ve en detalle cada centro de salud del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de centros de salud',
            'slug'          => 'centrosalud.create',
            'description'   => 'Podría crear nuevos centros de salud en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de centros de salud',
            'slug'          => 'centrosalud.edit',
            'description'   => 'Podría editar cualquier dato de un centro de salud del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar centros de salud',
            'slug'          => 'centrosalud.destroy',
            'description'   => 'Podría eliminar cualquier centro de salud del sistema',      
        ]);

        // Comisarias
        Permission::create([
            'name'          => 'Navegar comisarias',
            'slug'          => 'comisaria.index',
            'description'   => 'Lista y navega todos las comisarias del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de una comisaria',
            'slug'          => 'comisaria.show',
            'description'   => 'Ve en detalle cada comisaria del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de comisarias',
            'slug'          => 'comisaria.create',
            'description'   => 'Podría crear nuevas comisarias en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de comisarias',
            'slug'          => 'comisaria.edit',
            'description'   => 'Podría editar cualquier dato de una comisaria del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar comisarias',
            'slug'          => 'comisaria.destroy',
            'description'   => 'Podría eliminar cualquier comisaria del sistema',      
        ]);

        // Instancias
        Permission::create([
            'name'          => 'Navegar instancias',
            'slug'          => 'instancia.index',
            'description'   => 'Lista y navega todos las instancias del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de una instancia',
            'slug'          => 'instancia.show',
            'description'   => 'Ve en detalle cada instancia del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de instancias',
            'slug'          => 'instancia.create',
            'description'   => 'Podría crear nuevas instancias en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de instancias',
            'slug'          => 'instancia.edit',
            'description'   => 'Podría editar cualquier dato de una instancia del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar instancias',
            'slug'          => 'instancia.destroy',
            'description'   => 'Podría eliminar cualquier instancia del sistema',      
        ]);

        // Motivos
        Permission::create([
            'name'          => 'Navegar motivos',
            'slug'          => 'motivo.index',
            'description'   => 'Lista y navega todos los motivos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un motivo',
            'slug'          => 'motivo.show',
            'description'   => 'Ve en detalle cada motivo del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de motivos',
            'slug'          => 'motivo.create',
            'description'   => 'Podría crear nuevos motivos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de motivos',
            'slug'          => 'motivo.edit',
            'description'   => 'Podría editar cualquier dato de un motivo del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar motivos',
            'slug'          => 'motivo.destroy',
            'description'   => 'Podría eliminar cualquier motivo del sistema',      
        ]);

        // Documentos
        Permission::create([
            'name'          => 'Navegar documentos',
            'slug'          => 'documento.index',
            'description'   => 'Lista y navega todos los documentos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un documento',
            'slug'          => 'documento.show',
            'description'   => 'Ve en detalle cada documento del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de documentos',
            'slug'          => 'documento.create',
            'description'   => 'Podría crear nuevos documentos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de documentos',
            'slug'          => 'documento.edit',
            'description'   => 'Podría editar cualquier dato de un documento del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar documentos',
            'slug'          => 'documento.destroy',
            'description'   => 'Podría eliminar cualquier documento del sistema',      
        ]);

        // Tipos
        Permission::create([
            'name'          => 'Navegar tipos',
            'slug'          => 'tipo.index',
            'description'   => 'Lista y navega todos los tipos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un tipo',
            'slug'          => 'tipo.show',
            'description'   => 'Ve en detalle cada tipo del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de tipos',
            'slug'          => 'tipo.create',
            'description'   => 'Podría crear nuevos tipos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de tipos',
            'slug'          => 'tipo.edit',
            'description'   => 'Podría editar cualquier dato de un tipo del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar tipos',
            'slug'          => 'tipo.destroy',
            'description'   => 'Podría eliminar cualquier tipo del sistema',      
        ]);

        // Parentescos
        Permission::create([
            'name'          => 'Navegar parentescos',
            'slug'          => 'parentesco.index',
            'description'   => 'Lista y navega todos los parentescos del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un parentesco',
            'slug'          => 'parentesco.show',
            'description'   => 'Ve en detalle cada parentesco del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de parentescos',
            'slug'          => 'parentesco.create',
            'description'   => 'Podría crear nuevos parentescos en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de parentescos',
            'slug'          => 'parentesco.edit',
            'description'   => 'Podría editar cualquier dato de un parentesco del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar parentescos',
            'slug'          => 'parentesco.destroy',
            'description'   => 'Podría eliminar cualquier parentesco del sistema',      
        ]);

        // Tipo denuncia
        Permission::create([
            'name'          => 'Navegar tipos de denuncia',
            'slug'          => 'tdenuncia.index',
            'description'   => 'Lista y navega todos los tipos de denuncia del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un tipo de denuncia',
            'slug'          => 'tdenuncia.show',
            'description'   => 'Ve en detalle cada tipo de denuncia del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de tipos de denuncia',
            'slug'          => 'tdenuncia.create',
            'description'   => 'Podría crear nuevos tipos de denuncia en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de tipos de denuncia',
            'slug'          => 'tdenuncia.edit',
            'description'   => 'Podría editar cualquier dato de un tipo de denuncia del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar tipos de denuncia',
            'slug'          => 'tdenuncia.destroy',
            'description'   => 'Podría eliminar cualquier tipo de denuncia del sistema',      
        ]);

        // Victimas
        Permission::create([
            'name'          => 'Navegar victimas',
            'slug'          => 'victima.index',
            'description'   => 'Lista y navega todas las victimas del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un victima',
            'slug'          => 'victima.show',
            'description'   => 'Ve en detalle cada victima del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de victimas',
            'slug'          => 'victima.create',
            'description'   => 'Podría crear nuevas victimas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de victimas',
            'slug'          => 'victima.edit',
            'description'   => 'Podría editar cualquier dato de una victima del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar victimas',
            'slug'          => 'victima.destroy',
            'description'   => 'Podría eliminar cualquier victima del sistema',      
        ]);

        // Agresores
        Permission::create([
            'name'          => 'Navegar agresores',
            'slug'          => 'agresor.index',
            'description'   => 'Lista y navega todos los agresores del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un agresor',
            'slug'          => 'agresor.show',
            'description'   => 'Ve en detalle cada agresor del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de agresores',
            'slug'          => 'agresor.create',
            'description'   => 'Podría crear nuevos agresores en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de agresores',
            'slug'          => 'agresor.edit',
            'description'   => 'Podría editar cualquier dato de un agresor del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar agresores',
            'slug'          => 'agresor.destroy',
            'description'   => 'Podría eliminar cualquier agresor del sistema',      
        ]);


        // Denuncias
        Permission::create([
            'name'          => 'Navegar denuncias',
            'slug'          => 'denuncia.index',
            'description'   => 'Lista y navega todas las denuncias del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un denuncia',
            'slug'          => 'denuncia.show',
            'description'   => 'Ve en detalle cada denuncia del sistema',            
        ]);

        Permission::create([
            'name'          => 'Generar reportes de denuncia',
            'slug'          => 'denuncia.report',
            'description'   => 'Generar reportes de denuncia',            
        ]);

        Permission::create([
            'name'          => 'Generar reportes estadisticos de denuncia',
            'slug'          => 'denuncia.estadistica',
            'description'   => 'Generar reportes estadisticos de denuncia',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de denuncias',
            'slug'          => 'denuncia.create',
            'description'   => 'Podría crear nuevas denuncias en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de denuncias',
            'slug'          => 'denuncia.edit',
            'description'   => 'Podría editar cualquier dato de una denuncia del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar denuncias',
            'slug'          => 'denuncia.destroy',
            'description'   => 'Podría eliminar cualquier denuncia del sistema',      
        ]);

        
    }
}
