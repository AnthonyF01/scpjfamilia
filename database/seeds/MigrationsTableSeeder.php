<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_01_154055_create_tbldepartamento_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_01_154621_create_tblmodulo_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2015_01_20_084450_create_roles_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2015_01_20_084525_create_role_user_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2015_01_24_080208_create_permissions_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2015_01_24_080433_create_permission_role_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2015_12_04_003040_add_special_role_column',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_06_01_000001_create_oauth_auth_codes_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2016_06_01_000002_create_oauth_access_tokens_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2016_06_01_000003_create_oauth_refresh_tokens_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2016_06_01_000004_create_oauth_clients_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2016_06_01_000005_create_oauth_personal_access_clients_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2017_10_17_170735_create_permission_user_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2018_11_01_155208_create_tblprovincia_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2018_11_01_155220_create_tbldistrito_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2018_11_01_174802_create_tblcentrosalud_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2018_11_05_075655_create_tblcomisaria_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2018_11_05_155810_create_tblinstancia_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2018_11_05_183935_create_tblmotivo_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2018_11_06_024513_create_tbldenuncia_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2018_11_06_025512_create_tbldocumento_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2018_11_06_025526_create_tbltipo_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2018_11_06_025530_create_tblparentesco_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2018_11_06_025655_create_victima_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2018_11_06_161612_create_agresor_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2018_11_06_165718_create_denuncia_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2018_11_10_165416_create_denuncia_victima_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2018_11_10_165631_create_denuncia_agresor_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2018_11_12_032107_create_denuncia_tbldenuncia_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2018_12_18_203938_create_device_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2018_12_26_194636_create_notification_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2019_02_10_205415_add_denuncia_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2019_02_12_192834_add_tblcomisaria_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2019_02_12_230539_create_tblmedida_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2019_02_12_231028_create_table_dpenal',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2019_02_12_231607_add1_denuncia_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2019_02_27_142435_create_documento_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2019_03_06_130753_create_denuncia_tblmedida_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2019_03_08_052330_create_tblviolencia_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2019_03_08_052441_create_denuncia_tblviolencia_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2019_03_15_085720_add_columns_table_permissions',
                'batch' => 1,
            ),
        ));
        
        
    }
}