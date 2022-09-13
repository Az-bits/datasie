<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class QFormRedesSeeder extends Seeder
{
    public function run()
    {

        $this->db->table('formularios_redes')->where('id_formulario_redes >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_formulario_redes' => null,
                'id_persona_solicitante' => $i,
                'id_persona_tecnico' => $i,
                'id_usuario' => 1,
                'id_procedimiento_redes' => $i,
            ];
            $this->db->table('formularios_redes')->insert($data);
        }
    }
}
