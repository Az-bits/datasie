<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NRevisionesRealizadasSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('revisiones_realizadas')->where('id_revision_realizada >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_revision_realizada' => null,
                'estado' => $i % 2 == 0 ? 'A' : 'I',
                'id_formulario_mantenimiento' => $i,
                'id_parte_equipo' => $i,
                'fecha_ini' => date('Y-m-d'),
                'fecha_fin' => date('Y-m-d'),
            ];
            $this->db->table('revisiones_realizadas')->insert($data);
        }
    }
}
