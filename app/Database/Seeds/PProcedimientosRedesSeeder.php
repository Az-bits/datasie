<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PProcedimientosRedesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('procedimientos_redes')->where('id_procedimiento_redes >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_procedimiento_redes' => null,
                'titulo_procedimiento' => 'titulo' . $i,
            ];
            $this->db->table('procedimientos_redes')->insert($data);
        }
    }
}
