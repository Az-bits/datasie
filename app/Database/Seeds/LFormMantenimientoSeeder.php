<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LFormMantenimientoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('formularios_mantenimientos')->where('id_formulario_mantenimiento >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_formulario_mantenimiento' => null,
                'id_persona_solicitante' =>  $i,
                'id_persona_tecnico' => $i,
                'id_usuario' => 1,
                'id_tipo_equipo' => $i,
                'id_marca_equipo' => $i,
                'id_modelo_equipo' => $i,
                'id_persona_tecnico' => $i,
                'cod_activo_fijo' => '00000' . $i,
                'id_defecto' => '00000' . $i,
            ];
            $this->db->table('formularios_mantenimientos')->insert($data);
        }
    }
}
