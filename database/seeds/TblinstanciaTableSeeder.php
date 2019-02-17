<?php

use Illuminate\Database\Seeder;

class TblinstanciaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblinstancia')->delete();
        
        \DB::table('tblinstancia')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Juzgado Civil',
                'sigla' => '1JCI',
                'tipo' => 'CI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Juzgado Civil',
                'sigla' => '2JCI',
                'tipo' => 'CI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '3° Juzgado Civil',
                'sigla' => '3JC',
                'tipo' => 'CI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Juzgado de Paz Letrado',
                'sigla' => '2JPL',
                'tipo' => 'PL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Juzgado de Paz Letrado',
                'sigla' => '3JPL',
                'tipo' => 'PL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'EXHORTO',
                'sigla' => 'EXH',
                'tipo' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Mixto - MBJ Alto del Alianza',
                'sigla' => 'JM-AA',
                'tipo' => 'JM',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juz. Inv. Prep - MBJ AA',
                'sigla' => '1JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juz. Inv. Preparatoria - Sede Tarata',
                'sigla' => 'JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Juz. Inv. Prep. - FLAGRANCIA, OAF Y CEED',
                'sigla' => '2JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Sala Penal de Apelaciones',
                'sigla' => '1SAP',
                'tipo' => 'SP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '5° Juzgado de Investigación Preparatoria - Flagrancia',
                'sigla' => '5JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Sala Civil',
                'sigla' => 'SC',
                'tipo' => 'SC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Juzgado Unipersonal Supraprovincial',
                'sigla' => '1JUN',
                'tipo' => 'PU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado de Paz Letrado Laboral',
                'sigla' => '1JPL',
                'tipo' => 'PL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado de Trabajo Transitorio',
                'sigla' => '1JTT',
                'tipo' => 'LA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Penal Colegiado Supraprovincial',
                'sigla' => '1JPC',
                'tipo' => 'JP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '3° Juzgado de Paz Letrado',
                'sigla' => '3JPL',
                'tipo' => 'PL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Sala Laboral Permanente',
                'sigla' => 'SL',
                'tipo' => 'SL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Juzgado Unipersonal Supraprovincial - FLAGRANCIA, OAF Y CEED',
                'sigla' => '2JUN',
                'tipo' => 'PU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Juzgado de Trabajo',
                'sigla' => '1JT',
                'tipo' => 'LA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Juzgado Especializado de Trabajo',
                'sigla' => '2JTR',
                'tipo' => 'LA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '4° Juzgado de Investigación Preparatoria',
                'sigla' => '4JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Civil Transitorio',
                'sigla' => '1JCT',
                'tipo' => 'CI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Juzgado de Familia',
                'sigla' => '1JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Juzgado de Familia',
                'sigla' => '2JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Mixto - Sede Locumba',
                'sigla' => 'JM-JB',
                'tipo' => 'JM',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juz. de Familia Tran. - MBJ GAL',
                'sigla' => 'JFT-GAL',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '6° Juzgado Inv. Preparatoria - DELITO AD. TRIB. MCDO. Y AMB',
                'sigla' => '6JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '3° Juzgado de Trabajo',
                'sigla' => '3JT',
                'tipo' => 'LA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '4° Juzgado Civil',
                'sigla' => '4JC',
                'tipo' => 'CI',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° Sala Civil',
                'sigla' => '2SC',
                'tipo' => 'SC',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Mixto - Tarata',
                'sigla' => 'JM-TA',
                'tipo' => 'JM',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '3° Juzgado Unipersonal Supraprovincial',
                'sigla' => '3JUN',
                'tipo' => 'PU',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '3° Juzgado de Investigación Preparatoria',
                'sigla' => '3JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° Juzgado de Investigación Preparatoria',
                'sigla' => '1JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '3° Juzgado de Familia',
                'sigla' => '3JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '4° Juzgado de Familia',
                'sigla' => '4JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
            'nombre' => 'Juz. Penal Liquidador (Ad. Funciones 5° JIP)- Sede Central',
                'sigla' => '5JP',
                'tipo' => 'JP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Unipersonal - Sede Tarata',
                'sigla' => 'JU',
                'tipo' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juz. de Paz Letrado - MBJ Alto del Alianza',
                'sigla' => 'JPL',
                'tipo' => 'PL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juz. de Paz Letrado - Sede Tarata',
                'sigla' => 'JPL',
                'tipo' => 'PL',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juz. Inv. Prep. - MBJ GAL',
                'sigla' => '1JIP',
                'tipo' => 'IP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
            'nombre' => 'Sala Penal Liquidadora(Ad. Func. Sala Penal Apelac.)',
                'sigla' => '1SPL',
                'tipo' => 'SP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
            'nombre' => 'Juzgado Penal Liquidador (AD Funciones 4° JIP)',
                'sigla' => '1JPL',
                'tipo' => 'JP',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'OTROS',
                'sigla' => 'OTR',
                'tipo' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'tblmodulo_id' => 30,
                'tbldepartamento_id' => 23,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'Juzgado Mixto - Candarave',
                'sigla' => 'JM-CA',
                'tipo' => 'JM',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '9° Juzgado de Familia',
                'sigla' => '9JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '10° Juzgado de Familia',
                'sigla' => '10JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '11° Juzgado de Familia',
                'sigla' => '11JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '12° Juzgado de Familia',
                'sigla' => '12JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '13° Juzgado de Familia',
                'sigla' => '13JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '14° Juzgado de Familia',
                'sigla' => '14JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '15° Juzgado de Familia',
                'sigla' => '15JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '16° Juzgado de Familia',
                'sigla' => '16JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'tblmodulo_id' => NULL,
                'tbldepartamento_id' => 15,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '17° Juzgado de Familia',
                'sigla' => '17JF',
                'tipo' => 'FA',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '1° JUZGADO DE FAMILIA - SEDE ANEXO 1',
                'sigla' => '1JFSA1',
                'tipo' => NULL,
                'created_at' => '2019-02-14 23:21:48',
                'updated_at' => '2019-02-14 23:21:48',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => '2° JUZGADO DE FAMILIA - SEDE JUZG. FAMILIA',
                'sigla' => '2JFSJF',
                'tipo' => NULL,
                'created_at' => '2019-02-14 23:22:21',
                'updated_at' => '2019-02-14 23:22:21',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'JUZGADO CIVIL - SEDE ANCON',
                'sigla' => 'JCSA',
                'tipo' => NULL,
                'created_at' => '2019-02-14 23:22:49',
                'updated_at' => '2019-02-14 23:22:49',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'JUZGADO CIVIL - SEDE MI PERÚ',
                'sigla' => 'JCSMP',
                'tipo' => NULL,
                'created_at' => '2019-02-14 23:23:15',
                'updated_at' => '2019-02-14 23:23:15',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'tblmodulo_id' => 33,
                'tbldepartamento_id' => 7,
                'tblprovincia_id' => NULL,
                'tbldistrito_id' => NULL,
                'nombre' => 'JUZGADO CIVIL - SEDE PACHACÚTEC',
                'sigla' => 'JCSP',
                'tipo' => NULL,
                'created_at' => '2019-02-14 23:23:42',
                'updated_at' => '2019-02-14 23:23:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}