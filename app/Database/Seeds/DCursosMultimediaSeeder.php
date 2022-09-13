<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DCursosMultimediaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('cursos_multimedia')->where('id_curso_multimedia >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_curso_multimedia' => null,
                'id_curso' => $i,
                'id_multimedia' => $i,
            ];
            $this->db->table('cursos_multimedia')->insert($data);
        }
    }
}
