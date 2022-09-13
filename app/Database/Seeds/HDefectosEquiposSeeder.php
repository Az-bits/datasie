<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HDefectosEquiposSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('defectos_equipo')->where('id_defecto >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_defecto' => null,
                'descripcion' => 'DefectoEquipo' . $i,
                'tipo_defecto ' => $i % 2 == 0 ? 'H' : 'S',
            ];
            $this->db->table('defectos_equipo')->insert($data);
        }
    }
}
