<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JMarcasEquipoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('marcas_equipos')->where('id_marca_equipo >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_marca_equipo' => null,
                'marca' => $i % 2 == 0 ? 'Hp' : 'Dell',
            ];
            $this->db->table('marcas_equipos')->insert($data);
        }
    }
}
