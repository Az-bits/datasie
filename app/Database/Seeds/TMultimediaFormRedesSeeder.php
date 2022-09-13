<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TMultimediaFormRedesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('multimedia_form_redes')->where('id_multimedia_form_redes >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_multimedia_form_redes' => null,
                'id_multimedia' => $i,
                'id_formulario_redes' => $i,
            ];
            $this->db->table('multimedia_form_redes')->insert($data);
        }
    }
}
