<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UFormSoftwareSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('formularios_software')->where('id_formulario_software >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_formulario_software' => null,
                'id_persona_solicitante' => $i,
                'id_persona_tecnico' => $i,
                'tipo_trabajo ' => 'trabajo' . $i,
            ];
            $this->db->table('formularios_software')->insert($data);
        }
    }
}
