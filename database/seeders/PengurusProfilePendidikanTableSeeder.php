<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengurusProfilePendidikanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pengurus_profile_pendidikan')->delete();
        
        \DB::table('pengurus_profile_pendidikan')->insert(array (
            0 => 
            array (
                'id' => '5',
                'pendidikan_jenis_id' => '2',
                'user_id' => '1',
                'dari' => '2007',
                'sampai' => '2013',
                'instansi' => 'SD Negeri 1 Tipar',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-04-23 07:06:46',
                'updated_at' => '2022-04-23 07:06:46',
            ),
            1 => 
            array (
                'id' => '6',
                'pendidikan_jenis_id' => '3',
                'user_id' => '1',
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'SMP PGRI 46 CIBINONG',
                'jurusan' => NULL,
                'keterangan' => 'VII B, VIII B, IX B',
                'created_at' => '2022-04-23 07:07:44',
                'updated_at' => '2022-04-23 07:07:44',
            ),
            2 => 
            array (
                'id' => '7',
                'pendidikan_jenis_id' => '4',
                'user_id' => '1',
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'SMK Negeri 1 Tanggeung',
                'jurusan' => 'Otomatisasi Tata Kelola Perkantoran',
                'keterangan' => 'Kelas OTKP 2',
                'created_at' => '2022-04-23 07:08:15',
                'updated_at' => '2022-04-23 07:08:15',
            ),
            3 => 
            array (
                'id' => '8',
                'pendidikan_jenis_id' => '5',
                'user_id' => '1',
                'dari' => '2019',
                'sampai' => NULL,
                'instansi' => 'Universitas Sangga Buana YPKP Bandung',
                'jurusan' => 'S1 Teknik Infomatika',
                'keterangan' => 'Kelas A2 2019',
                'created_at' => '2022-04-23 07:08:39',
                'updated_at' => '2022-04-23 07:08:39',
            ),
            4 => 
            array (
                'id' => '9',
                'pendidikan_jenis_id' => '2',
                'user_id' => '17',
                'dari' => '2008',
                'sampai' => '2014',
                'instansi' => 'SD NEGERI POGOR',
                'jurusan' => '-',
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:17:26',
                'updated_at' => '2022-07-15 22:17:26',
            ),
            5 => 
            array (
                'id' => '10',
                'pendidikan_jenis_id' => '5',
                'user_id' => '101',
                'dari' => '2020',
                'sampai' => '2024',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Ilmu komunikasi hubungan masyarakat dan',
                'keterangan' => 'Kelas Humas 4C',
                'created_at' => '2022-07-15 22:20:47',
                'updated_at' => '2022-07-15 22:20:47',
            ),
            6 => 
            array (
                'id' => '11',
                'pendidikan_jenis_id' => '2',
                'user_id' => '21',
                'dari' => '2005',
                'sampai' => '2011',
                'instansi' => 'SDN CIAKAR',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:41:06',
                'updated_at' => '2022-07-15 22:42:01',
            ),
            7 => 
            array (
                'id' => '12',
                'pendidikan_jenis_id' => '3',
                'user_id' => '21',
                'dari' => '2011',
                'sampai' => '2014',
                'instansi' => 'SMPN 2 SINDANGBARANG',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:41:49',
                'updated_at' => '2022-07-15 22:41:49',
            ),
            8 => 
            array (
                'id' => '13',
                'pendidikan_jenis_id' => '4',
                'user_id' => '101',
                'dari' => '2017',
                'sampai' => '2020',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => 'IPA',
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:43:02',
                'updated_at' => '2022-07-15 22:43:19',
            ),
            9 => 
            array (
                'id' => '14',
                'pendidikan_jenis_id' => '4',
                'user_id' => '21',
                'dari' => '2014',
                'sampai' => '2015',
                'instansi' => 'MA AR-ROCHMAH LEMBANG',
                'jurusan' => 'IPS',
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:43:49',
                'updated_at' => '2022-07-15 22:44:02',
            ),
            10 => 
            array (
                'id' => '15',
                'pendidikan_jenis_id' => '4',
                'user_id' => '21',
                'dari' => '2015',
                'sampai' => '2017',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => 'IPS',
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:44:22',
                'updated_at' => '2022-07-15 22:44:22',
            ),
            11 => 
            array (
                'id' => '16',
                'pendidikan_jenis_id' => '3',
                'user_id' => '101',
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'SMP 1 CIBEBER',
                'jurusan' => '-',
                'keterangan' => 'Kelas F',
                'created_at' => '2022-07-15 22:47:10',
                'updated_at' => '2022-07-15 22:47:10',
            ),
            12 => 
            array (
                'id' => '17',
                'pendidikan_jenis_id' => '2',
                'user_id' => '101',
                'dari' => '2008',
                'sampai' => '2013',
                'instansi' => 'MI AL KHOERIYAH',
                'jurusan' => '-',
                'keterangan' => NULL,
                'created_at' => '2022-07-15 22:47:46',
                'updated_at' => '2022-07-15 22:47:46',
            ),
            13 => 
            array (
                'id' => '18',
                'pendidikan_jenis_id' => '5',
                'user_id' => '99',
                'dari' => '2020',
                'sampai' => '2024',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Bahasa dan Sastra Arab',
                'keterangan' => 'Kelas A',
                'created_at' => '2022-07-16 11:11:19',
                'updated_at' => '2022-07-16 11:20:43',
            ),
            14 => 
            array (
                'id' => '19',
                'pendidikan_jenis_id' => '4',
                'user_id' => '99',
                'dari' => '2017',
                'sampai' => '2020',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => 'IPA',
                'keterangan' => 'Kelas IPA 2',
                'created_at' => '2022-07-16 11:20:25',
                'updated_at' => '2022-07-16 11:20:25',
            ),
            15 => 
            array (
                'id' => '20',
                'pendidikan_jenis_id' => '5',
                'user_id' => '100',
                'dari' => '2021',
                'sampai' => '2025',
                'instansi' => 'Stisip Guna Nusantara Cianjur',
                'jurusan' => 'Ilmu Pemerintahan',
                'keterangan' => '652012122077 Kelas A',
                'created_at' => '2022-07-19 20:00:06',
                'updated_at' => '2022-07-19 20:00:06',
            ),
            16 => 
            array (
                'id' => '21',
                'pendidikan_jenis_id' => '2',
                'user_id' => '100',
                'dari' => '2009',
                'sampai' => '2015',
                'instansi' => 'Mi Cijoho',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-07-19 20:06:13',
                'updated_at' => '2022-07-19 20:06:13',
            ),
            17 => 
            array (
                'id' => '22',
                'pendidikan_jenis_id' => '3',
                'user_id' => '100',
                'dari' => '2015',
                'sampai' => '2018',
                'instansi' => 'Mts Tanwirul Amin',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-07-19 20:07:24',
                'updated_at' => '2022-07-19 20:08:10',
            ),
            18 => 
            array (
                'id' => '23',
                'pendidikan_jenis_id' => '4',
                'user_id' => '100',
                'dari' => '2018',
                'sampai' => '2021',
                'instansi' => 'MA Tanwirul',
                'jurusan' => 'Ips',
                'keterangan' => NULL,
                'created_at' => '2022-07-19 20:07:55',
                'updated_at' => '2022-07-19 20:07:55',
            ),
            19 => 
            array (
                'id' => '25',
                'pendidikan_jenis_id' => '2',
                'user_id' => '87',
                'dari' => '2006',
                'sampai' => '2012',
                'instansi' => 'SDN Sukaresmi',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 17:51:19',
                'updated_at' => '2022-08-30 17:51:19',
            ),
            20 => 
            array (
                'id' => '26',
                'pendidikan_jenis_id' => '3',
                'user_id' => '87',
                'dari' => '2012',
                'sampai' => '2015',
                'instansi' => 'SMPN 3 TAKOKAK',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 17:52:08',
                'updated_at' => '2022-08-30 17:52:08',
            ),
            21 => 
            array (
                'id' => '27',
                'pendidikan_jenis_id' => '4',
                'user_id' => '87',
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'SMA plus YASPIDA Sukabumi',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 17:52:36',
                'updated_at' => '2022-08-30 17:52:36',
            ),
            22 => 
            array (
                'id' => '28',
                'pendidikan_jenis_id' => '5',
                'user_id' => '87',
                'dari' => '2019',
                'sampai' => '2023',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Ekonomi Syariah',
                'keterangan' => NULL,
                'created_at' => '2022-08-30 17:53:07',
                'updated_at' => '2022-08-30 17:53:07',
            ),
            23 => 
            array (
                'id' => '29',
                'pendidikan_jenis_id' => '5',
                'user_id' => '85',
                'dari' => '2022',
                'sampai' => '2026',
                'instansi' => 'Universitas pakuan Bogor',
                'jurusan' => 'Farmasi',
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:04:20',
                'updated_at' => '2022-09-01 02:17:23',
            ),
            24 => 
            array (
                'id' => '30',
                'pendidikan_jenis_id' => '5',
                'user_id' => '86',
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Sejarah dan Peradaban Islam',
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:05:22',
                'updated_at' => '2022-08-30 18:05:22',
            ),
            25 => 
            array (
                'id' => '31',
                'pendidikan_jenis_id' => '2',
                'user_id' => '97',
                'dari' => '2007',
                'sampai' => '2013',
                'instansi' => 'MI AL-HUDA RAWAHANJA',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:15:10',
                'updated_at' => '2022-08-30 18:15:10',
            ),
            26 => 
            array (
                'id' => '32',
                'pendidikan_jenis_id' => '3',
                'user_id' => '97',
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'MTS AL-HUDA RAWAHANJA',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:15:58',
                'updated_at' => '2022-08-30 18:15:58',
            ),
            27 => 
            array (
                'id' => '33',
                'pendidikan_jenis_id' => '4',
                'user_id' => '97',
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'MAS AL-MANSHURIYAH',
                'jurusan' => 'IPA',
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:16:45',
                'updated_at' => '2022-08-30 18:16:45',
            ),
            28 => 
            array (
                'id' => '34',
                'pendidikan_jenis_id' => '6',
                'user_id' => '97',
                'dari' => '2019',
                'sampai' => '2020',
            'instansi' => 'AZHARY CENTER (DARUL AZHAR)',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:18:45',
                'updated_at' => '2022-08-30 18:18:45',
            ),
            29 => 
            array (
                'id' => '35',
                'pendidikan_jenis_id' => '5',
                'user_id' => '97',
                'dari' => '2020',
                'sampai' => '2024',
                'instansi' => 'Universitas Muhammadiyah Bandung',
                'jurusan' => 'Psikologi',
                'keterangan' => NULL,
                'created_at' => '2022-08-30 18:40:42',
                'updated_at' => '2022-08-30 18:40:42',
            ),
            30 => 
            array (
                'id' => '36',
                'pendidikan_jenis_id' => '2',
                'user_id' => '57',
                'dari' => '2006',
                'sampai' => '2012',
                'instansi' => 'SDN Sumberjaya',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 19:45:28',
                'updated_at' => '2022-08-30 19:45:28',
            ),
            31 => 
            array (
                'id' => '37',
                'pendidikan_jenis_id' => '3',
                'user_id' => '57',
                'dari' => '2012',
                'sampai' => '2015',
                'instansi' => 'MTsN 1 Tanggeung',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 19:46:15',
                'updated_at' => '2022-08-30 19:46:15',
            ),
            32 => 
            array (
                'id' => '38',
                'pendidikan_jenis_id' => '4',
                'user_id' => '57',
                'dari' => '2015',
                'sampai' => '2018',
                'instansi' => 'MAN 3 CIANJUR',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 19:46:45',
                'updated_at' => '2022-08-30 19:46:45',
            ),
            33 => 
            array (
                'id' => '39',
                'pendidikan_jenis_id' => '5',
                'user_id' => '57',
                'dari' => '2019',
                'sampai' => NULL,
            'instansi' => 'Institut Keguruan Ilmu Pendidikan (IKIP) Siliwangi Cimahi',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 19:51:15',
                'updated_at' => '2022-08-30 19:51:15',
            ),
            34 => 
            array (
                'id' => '40',
                'pendidikan_jenis_id' => '5',
                'user_id' => '84',
                'dari' => '2022',
                'sampai' => '2026',
                'instansi' => 'Universitas Islam Nusantara',
                'jurusan' => 'Agroteknologi',
                'keterangan' => NULL,
                'created_at' => '2022-08-30 20:20:22',
                'updated_at' => '2022-08-30 20:20:22',
            ),
            35 => 
            array (
                'id' => '42',
                'pendidikan_jenis_id' => '2',
                'user_id' => '73',
                'dari' => '2009',
                'sampai' => '2014',
                'instansi' => 'SDN KARANG ANYAR',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 20:56:04',
                'updated_at' => '2022-08-30 20:56:04',
            ),
            36 => 
            array (
                'id' => '43',
                'pendidikan_jenis_id' => '3',
                'user_id' => '73',
                'dari' => '2015',
                'sampai' => '2017',
                'instansi' => 'SMPN 1 CIJATI',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 20:57:39',
                'updated_at' => '2022-08-30 21:10:17',
            ),
            37 => 
            array (
                'id' => '44',
                'pendidikan_jenis_id' => '4',
                'user_id' => '73',
                'dari' => '2018',
                'sampai' => '2021',
                'instansi' => 'SMKN 1 CIJATI',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'keterangan' => 'RPL 2',
                'created_at' => '2022-08-30 20:58:27',
                'updated_at' => '2022-08-30 20:58:27',
            ),
            38 => 
            array (
                'id' => '45',
                'pendidikan_jenis_id' => '5',
                'user_id' => '73',
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Universitas Suryakancana',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-30 21:06:45',
                'updated_at' => '2022-08-30 21:07:51',
            ),
            39 => 
            array (
                'id' => '52',
                'pendidikan_jenis_id' => '2',
                'user_id' => '46',
                'dari' => '2009',
                'sampai' => '2014',
                'instansi' => 'SD Negeri Rawasari',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-31 17:48:38',
                'updated_at' => '2022-08-31 18:28:13',
            ),
            40 => 
            array (
                'id' => '53',
                'pendidikan_jenis_id' => '3',
                'user_id' => '46',
                'dari' => '2014',
                'sampai' => '2017',
                'instansi' => 'SMP Negeri 1 Pagelaran',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-08-31 17:50:21',
                'updated_at' => '2022-08-31 18:26:45',
            ),
            41 => 
            array (
                'id' => '54',
                'pendidikan_jenis_id' => '4',
                'user_id' => '46',
                'dari' => '2017',
                'sampai' => '2020',
                'instansi' => 'SMK Negeri 1 Tanggeung',
            'jurusan' => 'Administrasi Perkantoran (AP)',
                'keterangan' => NULL,
                'created_at' => '2022-08-31 17:51:18',
                'updated_at' => '2022-08-31 18:27:20',
            ),
            42 => 
            array (
                'id' => '55',
                'pendidikan_jenis_id' => '5',
                'user_id' => '46',
                'dari' => '2020',
                'sampai' => '2024',
            'instansi' => 'Institut Pendidikan Dan Bahasa (IPB) INVADA Cirebon',
            'jurusan' => 'Pendidikan Guru Sekolah Dasar (PGSD)',
                'keterangan' => NULL,
                'created_at' => '2022-08-31 17:52:57',
                'updated_at' => '2022-08-31 18:25:31',
            ),
            43 => 
            array (
                'id' => '56',
                'pendidikan_jenis_id' => '1',
                'user_id' => '89',
                'dari' => '2008',
                'sampai' => '2009',
                'instansi' => 'Paud Pepaya Cikadu',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-09-01 01:00:55',
                'updated_at' => '2022-09-01 01:00:55',
            ),
            44 => 
            array (
                'id' => '57',
                'pendidikan_jenis_id' => '2',
                'user_id' => '89',
                'dari' => '2009',
                'sampai' => '2010',
                'instansi' => 'SD NEGERI CIKADU 1',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-09-01 01:02:09',
                'updated_at' => '2022-09-01 01:03:51',
            ),
            45 => 
            array (
                'id' => '58',
                'pendidikan_jenis_id' => '2',
                'user_id' => '89',
                'dari' => '2010',
                'sampai' => '2015',
                'instansi' => 'SD CIDOMBA',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-09-01 01:02:26',
                'updated_at' => '2022-09-01 01:04:37',
            ),
            46 => 
            array (
                'id' => '59',
                'pendidikan_jenis_id' => '3',
                'user_id' => '89',
                'dari' => '2015',
                'sampai' => '2018',
                'instansi' => 'SMP NEGERI 1 CIKADU',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-09-01 01:03:23',
                'updated_at' => '2022-09-01 01:05:26',
            ),
            47 => 
            array (
                'id' => '60',
                'pendidikan_jenis_id' => '4',
                'user_id' => '89',
                'dari' => '2018',
                'sampai' => '2021',
                'instansi' => 'SMK NEGERI 1 CIKADU',
                'jurusan' => 'Otomatisasi dan Tata Kelola Perkantoran',
                'keterangan' => NULL,
                'created_at' => '2022-09-01 01:06:30',
                'updated_at' => '2022-09-01 01:06:30',
            ),
            48 => 
            array (
                'id' => '61',
                'pendidikan_jenis_id' => '5',
                'user_id' => '89',
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Universitas Winaya Mukti',
                'jurusan' => 'Manajemen',
                'keterangan' => 'Fakultas Ekonomi dan Bisnis',
                'created_at' => '2022-09-01 01:07:16',
                'updated_at' => '2022-09-01 01:07:16',
            ),
            49 => 
            array (
                'id' => '62',
                'pendidikan_jenis_id' => '4',
                'user_id' => '110',
                'dari' => '2019',
                'sampai' => '2021',
                'instansi' => 'SMA Negri 1 Pasirkuda',
                'jurusan' => 'IPS',
                'keterangan' => NULL,
                'created_at' => '2022-09-01 06:15:13',
                'updated_at' => '2022-09-01 06:15:13',
            ),
            50 => 
            array (
                'id' => '63',
                'pendidikan_jenis_id' => '2',
                'user_id' => '91',
                'dari' => '2008',
                'sampai' => '2013',
                'instansi' => 'SD Negeri Layung Sari',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-09-07 11:37:26',
                'updated_at' => '2022-09-07 11:41:50',
            ),
            51 => 
            array (
                'id' => '64',
                'pendidikan_jenis_id' => '3',
                'user_id' => '91',
                'dari' => '2013',
                'sampai' => '2016',
                'instansi' => 'MTsN 2 Cianjur',
                'jurusan' => NULL,
                'keterangan' => NULL,
                'created_at' => '2022-09-07 11:39:11',
                'updated_at' => '2022-09-07 11:39:11',
            ),
            52 => 
            array (
                'id' => '65',
                'pendidikan_jenis_id' => '4',
                'user_id' => '91',
                'dari' => '2016',
                'sampai' => '2019',
                'instansi' => 'SMA Negeri 1 Cibinong',
                'jurusan' => 'Ilmu Pendidikan Sosial',
                'keterangan' => NULL,
                'created_at' => '2022-09-07 11:40:38',
                'updated_at' => '2022-09-07 11:40:38',
            ),
            53 => 
            array (
                'id' => '66',
                'pendidikan_jenis_id' => '5',
                'user_id' => '50',
                'dari' => '2019',
                'sampai' => '2023',
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Pendidikan Agama Islam',
                'keterangan' => NULL,
                'created_at' => '2022-10-01 14:50:32',
                'updated_at' => '2022-10-01 14:50:32',
            ),
            54 => 
            array (
                'id' => '67',
                'pendidikan_jenis_id' => '5',
                'user_id' => '33',
                'dari' => '2019',
                'sampai' => NULL,
                'instansi' => 'Universitas Islam Negeri Sunan Gunung Djati Bandung',
                'jurusan' => 'Bahasa dan Sastra Arab',
                'keterangan' => NULL,
                'created_at' => '2022-10-01 14:56:14',
                'updated_at' => '2022-10-01 14:56:14',
            ),
            55 => 
            array (
                'id' => '68',
                'pendidikan_jenis_id' => '5',
                'user_id' => '90',
                'dari' => '2021',
                'sampai' => NULL,
                'instansi' => 'Stisip Guna Nusantara Cianjur',
                'jurusan' => 'Ilmu pemerintahan',
                'keterangan' => NULL,
                'created_at' => '2022-12-17 14:31:10',
                'updated_at' => '2022-12-17 14:31:10',
            ),
        ));
        
        
    }
}