<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ETipoPublicacionSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tipo_publicacion')->where('id_tipo_publicacion >=', 1)->delete();
        $dep = ['PRESENCIAL', 'VIRTUAL', 'SEMI-PRESENCIAL'];
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_tipo_publicacion' => null,
                'estado' => $i ? 'A' : 'I',
            ];
            $this->db->table('tipo_publicacion')->insert($data);
        }
    }
}
