<?php

use Illuminate\Database\Seeder;

class TbldpenalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbldpenal')->delete();
        
        \DB::table('tbldpenal')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'SEXUAL',
                'parent' => NULL,
                'nivel' => 1,
                'created_at' => '2019-03-24 12:16:38',
                'updated_at' => '2019-03-24 12:16:39',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'VIOLENCIA',
                'parent' => NULL,
                'nivel' => 1,
                'created_at' => '2019-03-24 12:16:54',
                'updated_at' => '2019-03-24 12:16:54',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Art. 153-B.6 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:11:13',
                'updated_at' => '2019-03-24 18:11:13',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Art. 153-B.1 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:13:22',
                'updated_at' => '2019-03-24 18:13:22',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Art. 153-B.2 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:13:54',
                'updated_at' => '2019-03-24 18:13:54',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Art. 153-B.4.2 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:14:13',
                'updated_at' => '2019-03-24 18:14:13',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Art. 153-B.4.3 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:14:28',
                'updated_at' => '2019-03-24 18:14:28',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Art. 153-B.5.6 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:14:46',
                'updated_at' => '2019-03-24 18:28:05',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Art. 153-B.5.4 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:16:08',
                'updated_at' => '2019-03-24 18:16:08',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Art. 153-B.4.1 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:17:44',
                'updated_at' => '2019-03-24 18:17:44',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Art. 153-B.5.3 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:18:59',
                'updated_at' => '2019-03-24 18:18:59',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Art. 153-B.5.1 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:19:33',
                'updated_at' => '2019-03-24 18:19:33',
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'Art. 153-B.5.2 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:20:12',
                'updated_at' => '2019-03-24 18:20:12',
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Art. 153-B.5.5 - Explotación Sexual',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:20:48',
                'updated_at' => '2019-03-24 18:20:48',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Art. 181-A.1 - Explotación Sexual comercial infantil y adolescente en ámbito del turismo',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:58:07',
                'updated_at' => '2019-03-24 18:58:07',
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Art. 181-A.2 - Explotación Sexual comercial infantil y adolescente en ámbito del turismo',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:58:45',
                'updated_at' => '2019-03-24 18:58:45',
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Art. 181-A.4 - Explotación Sexual comercial infantil y adolescente en ámbito del turismo',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 18:59:05',
                'updated_at' => '2019-03-24 18:59:05',
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Art. 183-B.1 - Proposiciones sexuales aniños, niñas y adolescentes',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:00:56',
                'updated_at' => '2019-03-24 19:01:43',
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Art. 183-B.2 - Proposiciones sexuales aniños, niñas y adolescentes',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:01:12',
                'updated_at' => '2019-03-24 19:01:55',
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'Art. 182-A.1 - Publicación en los medios de comunicación sobre delitos de libertad sexual a menores',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:03:58',
                'updated_at' => '2019-03-24 19:03:58',
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Art. 173.1.2 - Violación sexual de menor de edad',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:05:23',
                'updated_at' => '2019-03-24 19:05:23',
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'Art. 173.1.1 - Violación sexual de menor de edad',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:06:54',
                'updated_at' => '2019-03-24 19:06:54',
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'Art. 173.2 - Violación sexual de menor de edad',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:07:26',
                'updated_at' => '2019-03-24 19:07:26',
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'Art. 173.A - Violación sexual de menor de edad seguida de muerte o lesión grave',
                'parent' => 1,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:08:12',
                'updated_at' => '2019-03-24 19:08:12',
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'Art. 367.2 - Formas agravadas  del delito de violencia y resistencia a la autoridad',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:10:21',
                'updated_at' => '2019-03-24 19:10:21',
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'Art. 367.3 - Formas agravadas  del delito de violencia y resistencia a la autoridad',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:10:50',
                'updated_at' => '2019-03-24 19:10:50',
            ),
            26 => 
            array (
                'id' => 27,
                'nombre' => 'Art. 367.1 - Formas agravadas  del delito de violencia y resistencia a la autoridad',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:11:05',
                'updated_at' => '2019-03-24 19:11:05',
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'Art. 413 - Fuga de reo mediante violencia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:11:42',
                'updated_at' => '2019-03-24 19:11:42',
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'Art. 366. - Violencia contra la autoridad para impedir el ejercicio de sus funciones',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:13:05',
                'updated_at' => '2019-03-24 19:13:05',
            ),
            29 => 
            array (
                'id' => 30,
            'nombre' => 'Art. 296-A.2 - Comercialización y cultivo de amapola y marihuana y su siembra compulsiva (Agravante: Coacción o violencia)',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:16:04',
                'updated_at' => '2019-03-24 19:16:53',
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'Art. 121-B.1.1 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:19:09',
                'updated_at' => '2019-03-24 19:19:09',
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'Art. 121-B.1.2 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:19:21',
                'updated_at' => '2019-03-24 19:19:21',
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => 'Art. 121-B.1.3 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:19:31',
                'updated_at' => '2019-03-24 19:20:18',
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => 'Art. 121-B.1.4 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:20:10',
                'updated_at' => '2019-03-24 19:20:10',
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => 'Art. 121-B.1.5 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:20:35',
                'updated_at' => '2019-03-24 19:20:35',
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => 'Art. 121-B.1.6 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:20:49',
                'updated_at' => '2019-03-24 19:20:49',
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => 'Art. 121-B.1.7 - Lesiones graves por violencia contra las mujeres e integrantes del grupo familia',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:21:38',
                'updated_at' => '2019-03-24 19:21:38',
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => 'Art. 122-B - Lesiones leves por Violencia Familiar',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:22:37',
                'updated_at' => '2019-03-24 19:22:37',
            ),
            38 => 
            array (
                'id' => 39,
                'nombre' => 'Art. 10.d - Cometiere, facilite, obstruya mediante violencia física o intimidación',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:25:01',
                'updated_at' => '2019-03-24 19:25:01',
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => 'Art. 9.15 - Tentativa Art.10.d - Cometiere, facilite, obstruya mediante violencia física o intimidación',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:26:13',
                'updated_at' => '2019-03-24 19:26:13',
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => 'Art. 384.b - El que con violencia o amenza interrumpa un acto electoral',
                'parent' => 2,
                'nivel' => 0,
                'created_at' => '2019-03-24 19:27:22',
                'updated_at' => '2019-03-24 19:27:22',
            ),
        ));
        
        
    }
}