<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FPublicacionSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('publicaciones')->where('id_publicacion >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_publicacion' => null,
                'id_usuario' => 1,
                'fecha_inicio' => date('Y-m-d'),
                'fecha_fin' =>  date('Y-m-d'),
                'id_tipo_publicacion' => $i,
            ];
            $this->db->table('publicaciones')->insert($data);
        }
    }
}
