<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SMaterialesUsadosSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('materiales_usados')->where('id_material_usado >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_material_usado' => null,
                'id_material' => $i,
                'cantidad' => $i * 10,
                'id_formulario_redes' => $i,
                'fecha_uso' => date('Y-m-d'),
            ];
            $this->db->table('materiales_usados')->insert($data);
        }
    }
}
