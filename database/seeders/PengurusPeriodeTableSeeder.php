<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PengurusPeriodeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pengurus_periode')->delete();
        
        \DB::table('pengurus_periode')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Kabinet Masagi',
                'foto' => NULL,
                'foto_folder' => '',
                'dari' => '2021',
                'sampai' => '2022',
                'slug' => 'kabinet-masagi',
                'slogan' => 'Ngabdi ka nagri bela ka nagara piken ngawujudkeun lemah nu sajati tur ngawangun cianjur pakidulan.',
                'visi' => '<p><p>"Terwujudnya KARMAPACK dan masyarakat Cianjur Kidul yang menjungjung tinggi nilai, dan norma agama, sosial serta budaya lokal."<br></p></p>
',
                'misi' => '<p><p>1. Meningkatkan pemahaman dan pengalaman keagamaan bagi anggota KARMAPACK dan masyarakat Cianjru Kidul<br style="">2. Melakukan pengabdian kepada masyarakat<br style="">3. Menumbuhkan rasa cinta terhadap seni dan budaya kedaerahan<br></p></p>
',
                'status' => 0,
                'created_at' => '2022-04-14 08:31:00',
                'updated_at' => '2022-04-14 08:31:00',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Pengaturan',
                'foto' => NULL,
                'foto_folder' => 'pengaturan1649927342',
                'dari' => '2001',
                'sampai' => '2001',
                'slug' => 'pengaturan',
                'slogan' => '1',
                'visi' => '<p><img style="width: 1050px;" data-bs-filename="How-to-Use-Summernote-Editor-for-Image-Upload-in-Laravel-9.jpg" src="/assets/pengurus/periode/pengaturan1649927342/visi16499273420.png"><br></p>
',
                'misi' => '<p><img style="width: 1113.2px;" data-bs-filename="b1f322dbbed952c183357f0fdab19249.png" src="/assets/pengurus/periode/pengaturan1649927342/misi16499273420.png"><br></p>
',
                'status' => 0,
                'created_at' => '2022-04-14 09:09:02',
                'updated_at' => '2022-04-14 09:09:02',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'tes',
                'foto' => NULL,
                'foto_folder' => 'tes1649927795',
                'dari' => '2001',
                'sampai' => '2001',
                'slug' => 'tes',
                'slogan' => '1',
                'visi' => '<p><img style="width: 700px;" data-bs-filename="34166-toleransi-di-jabar-dianggap-rendah-mui-tidak-benar.jpeg" src="/assets/pengurus/periode/tes1649927795/visi16499277950.png"><br></p>
',
                'misi' => '<p><img style="width: 1050px;" data-bs-filename="How-to-Use-Summernote-Editor-for-Image-Upload-in-Laravel-9.jpg" src="/assets/pengurus/periode/tes1649927795/misi16499277950.png"><p><img style="width: 700px;" data-bs-filename="34166-toleransi-di-jabar-dianggap-rendah-mui-tidak-benar.jpeg" src="/assets/pengurus/periode/tes1649927795/misi16499279621.png"><br></p></p>
',
                'status' => 1,
                'created_at' => '2022-04-14 09:16:35',
                'updated_at' => '2022-04-14 09:19:22',
            ),
        ));
        
        
    }
}