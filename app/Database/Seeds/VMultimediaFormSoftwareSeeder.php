<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VMultimediaFormSoftwareSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('multimedia_form_software')->where('id_multimedia_form_software >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_multimedia_form_software' => null,
                'id_multimedia' => $i,
                'id_formulario_software' => $i,
            ];
            $this->db->table('multimedia_form_software')->insert($data);
        }
    }
}
