<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WzTiposOperacionesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tipos_operaciones')->where('id_tipo_operacion >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_tipo_operacion' => null,
                'titulo_operacion' => 'titulo' . $i,
            ];
            $this->db->table('tipos_operaciones')->insert($data);
        }
    }
}
