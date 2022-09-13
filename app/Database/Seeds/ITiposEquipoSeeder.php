<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ITiposEquipoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('tipos_equipos')->where('id_tipo_equipo >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_tipo_equipo' => null,
                'equipo' => $i % 2 == 0 ? 'Laptop' : 'Pc',
            ];
            $this->db->table('tipos_equipos')->insert($data);
        }
    }
}
