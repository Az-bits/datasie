<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ACursosSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('cursos')->where('id_curso >=', 1)->delete();
        $dep = ['PRESENCIAL', 'VIRTUAL', 'SEMI-PRESENCIAL'];
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_curso' => null,
                'nombre_curso' => 'curso' . $i,
                'modalidad' => $i % 2 == 0 ? $dep[0] : ($i % 5 == 0 ? $dep[2] : $dep[1]),
            ];
            $this->db->table('cursos')->insert($data);
        }
        // Using Query Builder
    }
}
