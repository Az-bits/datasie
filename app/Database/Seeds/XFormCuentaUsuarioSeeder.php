<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class XFormCuentaUsuarioSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('formularios_cuenta_usuario')->where('id_formulario_cuenta_usuario >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_formulario_cuenta_usuario' => null,
                'id_persona_solicitante' => $i,
                'id_persona_tecnico' => $i,
                'id_tipo_operacion' => $i,
                'id_tipo_personal' => $i,
                'id_persona_tecnico' => $i,
            ];
            $this->db->table('formularios_cuenta_usuario')->insert($data);
        }
    }
}
