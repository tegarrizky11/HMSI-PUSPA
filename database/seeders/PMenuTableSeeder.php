<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => 344,
                'parent_id' => NULL,
                'title' => 'Administrator Menu',
                'icon' => 'icon',
                'route' => 'debugbar.openhandler',
                'sequence' => 1,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 00:38:58',
            ),
            1 => 
            array (
                'id' => 345,
                'parent_id' => NULL,
                'title' => 'Admin Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => 2,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:50:54',
            ),
            2 => 
            array (
                'id' => 346,
                'parent_id' => NULL,
                'title' => 'Anggota',
                'icon' => 'fas fa-users',
                'route' => 'admin.user',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:52:22',
            ),
            3 => 
            array (
                'id' => 347,
                'parent_id' => NULL,
                'title' => 'Profile Addon',
                'icon' => 'fas fa-user',
                'route' => NULL,
                'sequence' => 5,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:52:31',
            ),
            4 => 
            array (
                'id' => 348,
                'parent_id' => 347,
                'title' => 'Pendidikan Jenis',
                'icon' => NULL,
                'route' => 'admin.profile.pendidikan_jenis',
                'sequence' => 6,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            5 => 
            array (
                'id' => 349,
                'parent_id' => 347,
                'title' => 'Kontak Tipe',
                'icon' => NULL,
                'route' => 'admin.profile.kontak_tipe',
                'sequence' => 7,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            6 => 
            array (
                'id' => 350,
                'parent_id' => NULL,
                'title' => 'Kepengurusan',
                'icon' => 'fas fa-sitemap',
                'route' => 'admin.pengurus.periode',
                'sequence' => 8,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:52:56',
            ),
            7 => 
            array (
                'id' => 351,
                'parent_id' => NULL,
                'title' => 'Artikel',
                'icon' => 'fas fa-file-alt',
                'route' => NULL,
                'sequence' => 9,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:53:40',
            ),
            8 => 
            array (
                'id' => 352,
                'parent_id' => 351,
                'title' => 'Data',
                'icon' => NULL,
                'route' => 'admin.artikel.data',
                'sequence' => 10,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            9 => 
            array (
                'id' => 353,
                'parent_id' => 351,
                'title' => 'Kategori',
                'icon' => NULL,
                'route' => 'admin.artikel.kategori',
                'sequence' => 11,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            10 => 
            array (
                'id' => 354,
                'parent_id' => 351,
                'title' => 'Tag',
                'icon' => NULL,
                'route' => 'admin.artikel.tag',
                'sequence' => 12,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            11 => 
            array (
                'id' => 355,
                'parent_id' => NULL,
                'title' => 'Address',
                'icon' => 'fas fa-map-marker-alt',
                'route' => NULL,
                'sequence' => 13,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:54:22',
            ),
            12 => 
            array (
                'id' => 356,
                'parent_id' => 355,
                'title' => 'Province',
                'icon' => NULL,
                'route' => 'admin.address.province',
                'sequence' => 14,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            13 => 
            array (
                'id' => 357,
                'parent_id' => 355,
                'title' => 'Regencie',
                'icon' => NULL,
                'route' => 'admin.address.regencie',
                'sequence' => 15,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            14 => 
            array (
                'id' => 358,
                'parent_id' => 355,
                'title' => 'District',
                'icon' => NULL,
                'route' => 'admin.address.district',
                'sequence' => 16,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            15 => 
            array (
                'id' => 359,
                'parent_id' => 355,
                'title' => 'Village',
                'icon' => NULL,
                'route' => 'admin.address.village',
                'sequence' => 17,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-06 15:35:53',
            ),
            16 => 
            array (
                'id' => 360,
                'parent_id' => NULL,
                'title' => 'Galeri',
                'icon' => 'fas fa-images',
                'route' => 'admin.galeri',
                'sequence' => 18,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:54:52',
            ),
            17 => 
            array (
                'id' => 361,
                'parent_id' => NULL,
                'title' => 'Menu',
                'icon' => 'fas fa-stream',
                'route' => 'admin.menu',
                'sequence' => 27,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            18 => 
            array (
                'id' => 362,
                'parent_id' => NULL,
                'title' => 'Pendaftaran',
                'icon' => 'fas fa-user-edit',
                'route' => NULL,
                'sequence' => 19,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-07 12:55:36',
            ),
            19 => 
            array (
                'id' => 363,
                'parent_id' => NULL,
                'title' => 'Sosial Media',
                'icon' => 'fas fa-share-alt',
                'route' => 'admin.social_media',
                'sequence' => 23,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            20 => 
            array (
                'id' => 364,
                'parent_id' => NULL,
                'title' => 'Kontak',
                'icon' => 'fas fa-phone',
                'route' => 'admin.contact',
                'sequence' => 24,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            21 => 
            array (
                'id' => 365,
                'parent_id' => NULL,
                'title' => 'Footer Instagram',
                'icon' => 'fas fa-image',
                'route' => 'admin.footer_instagram',
                'sequence' => 25,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            22 => 
            array (
                'id' => 366,
                'parent_id' => NULL,
                'title' => 'Username Role',
                'icon' => 'fas fa-check',
                'route' => 'admin.username_validation',
                'sequence' => 26,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            23 => 
            array (
                'id' => 367,
                'parent_id' => NULL,
                'title' => 'User Access',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => 28,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            24 => 
            array (
                'id' => 368,
                'parent_id' => 367,
                'title' => 'Permission',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => 29,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            25 => 
            array (
                'id' => 369,
                'parent_id' => 367,
                'title' => 'Role',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => 30,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            26 => 
            array (
                'id' => 370,
                'parent_id' => NULL,
                'title' => 'Anggota Menu',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 34,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-09 16:45:34',
            ),
            27 => 
            array (
                'id' => 372,
                'parent_id' => NULL,
                'title' => 'Profile',
                'icon' => 'fas fa-user',
                'route' => 'member.profile',
                'sequence' => 35,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-09 16:45:34',
            ),
            28 => 
            array (
                'id' => 373,
                'parent_id' => NULL,
                'title' => 'Ganti Password',
                'icon' => 'fas fa-key',
                'route' => 'member.password',
                'sequence' => 38,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2022-08-09 15:24:10',
            ),
            29 => 
            array (
                'id' => 386,
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => 39,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2022-08-09 15:24:10',
            ),
            30 => 
            array (
                'id' => 387,
                'parent_id' => 362,
                'title' => 'List Data',
                'icon' => NULL,
                'route' => 'admin.pendaftaran',
                'sequence' => 20,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-06 00:05:47',
                'updated_at' => '2022-08-08 16:15:16',
            ),
            31 => 
            array (
                'id' => 388,
                'parent_id' => 362,
                'title' => 'Sensus Anggota',
                'icon' => NULL,
                'route' => 'admin.pendaftaran.sensus',
                'sequence' => 22,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-06 00:06:23',
                'updated_at' => '2022-08-08 16:15:07',
            ),
            32 => 
            array (
                'id' => 389,
                'parent_id' => NULL,
                'title' => 'Alumni Menu',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 36,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-08-06 14:06:05',
                'updated_at' => '2022-08-09 16:45:34',
            ),
            33 => 
            array (
                'id' => 390,
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'member.dashboard',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-06 15:16:19',
                'updated_at' => '2022-08-07 12:52:03',
            ),
            34 => 
            array (
                'id' => 392,
                'parent_id' => 362,
                'title' => 'Google Forms',
                'icon' => NULL,
                'route' => 'admin.pendaftaran.gform',
                'sequence' => 21,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-08 16:14:54',
                'updated_at' => '2022-08-08 16:15:16',
            ),
            35 => 
            array (
                'id' => 393,
                'parent_id' => NULL,
                'title' => 'Utility',
                'icon' => 'fas fa-tools',
                'route' => NULL,
                'sequence' => 31,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-08 22:41:26',
                'updated_at' => '2022-08-08 22:42:10',
            ),
            36 => 
            array (
                'id' => 394,
                'parent_id' => 393,
                'title' => 'Notifikasi Depan Atas',
                'icon' => NULL,
                'route' => 'admin.utility.notif_depan_atas',
                'sequence' => 32,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-08 22:41:53',
                'updated_at' => '2022-08-08 22:42:10',
            ),
            37 => 
            array (
                'id' => 395,
                'parent_id' => NULL,
                'title' => 'List Kata Alumni',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.kata_alumni',
                'sequence' => 33,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-09 15:20:36',
                'updated_at' => '2022-08-09 15:23:18',
            ),
            38 => 
            array (
                'id' => 396,
                'parent_id' => NULL,
                'title' => 'Kata Alumni',
                'icon' => 'fas fa-user-edit',
                'route' => 'member.kata_alumni',
                'sequence' => 37,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-09 15:23:52',
                'updated_at' => '2022-08-09 16:45:34',
            ),
        ));
        
        
    }
}