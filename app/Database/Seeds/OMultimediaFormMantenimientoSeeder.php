<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OMultimediaFormMantenimientoSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('multimedia_form_mantenimiento')->where('id_multimedia_form_mantenimiento >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_multimedia_form_mantenimiento' => null,
                'id_multimedia' => $i,
                'id_formulario_mantenimiento' => $i,
            ];
            $this->db->table('multimedia_form_mantenimiento')->insert($data);
        }
    }
}
