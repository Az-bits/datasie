<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MultimediaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('multimedia')->where('id_multimedia >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_multimedia' => null,
                'nombre_archivo' => 'Archivo' . $i,
                'url' => '/person/image' . $i,
                'extension' => 'pdf',
                'fecha_registro' => date('Y-m-d'),
            ];
            $this->db->table('multimedia')->insert($data);
        }
    }
}
