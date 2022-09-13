<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MPartesEquipoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('partes_equipo')->where('id_parte_equipo >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_parte_equipo' => null,
                'parte_equipo' => 'ParteEquipo' . $i,
                'marca' => 'Marca' . $i,
                'modelo' => 'Modelo' . $i,
            ];
            $this->db->table('partes_equipo')->insert($data);
        }
    }
}
