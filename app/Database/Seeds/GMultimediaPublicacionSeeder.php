<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GMultimediaPublicacionSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('multimedia_publicaciones')->where('id_multimedia_publicaciones >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_multimedia_publicaciones' => null,
                'id_multimedia' => $i,
                'id_publicacion' => $i,
            ];
            $this->db->table('multimedia_publicaciones')->insert($data);
        }
    }
}
