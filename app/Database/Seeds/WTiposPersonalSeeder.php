<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WTiposPersonalSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tipos_personal')->where('id_tipo_personal >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_tipo_personal' => null,
                'tipo_personal' => 'Personal' . $i,
            ];
            $this->db->table('tipos_personal')->insert($data);
        }
    }
}
