<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RMaterialesUpeaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('materiales_upea')->where('id_material >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_material' => null,
                'nombre_material' => 'Material' . $i,
            ];
            $this->db->table('materiales_upea')->insert($data);
        }
    }
}
