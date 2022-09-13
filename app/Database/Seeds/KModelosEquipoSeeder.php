<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KModelosEquipoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('modelos_equipos')->where('id_modelo_equipo >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_modelo_equipo' => null,
                'modelo' => 'modelo' . $i,
            ];
            $this->db->table('modelos_equipos')->insert($data);
        }
    }
}
