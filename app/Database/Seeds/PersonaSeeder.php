<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('view_persona')->where('id >=', 1)->delete();
        $dep = ['LP', 'OR', 'CBBA', 'PT', 'SC', 'BN', 'TR', 'PN', 'CH'];
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id' => null,
                'ci' => 10000000 + $i,
                'expedido' => $i <= 8 ? $dep[$i - 1] : $i - 2,
                'nombre' => 'Person' . $i,
                'paterno' => 'Paterno' . $i,
                'materno' => 'Materno' . $i,
                'fecha_nac' => date('Y-m-d'),
                //'genero' => $i % 2 == 0 ? 'M' : 'F',
                'celular' => $i > 9 ? '00000000' : $i . $i . $i . $i . $i . $i . $i . $i,
                'email' => 'persona' . $i . '@gmail.com',
                'estados' => $i % 5 == 0 ? 'I' : 'A'
            ];
            $this->db->table('view_persona')->insert($data);
        }
        // Using Query Builder
    }
}
