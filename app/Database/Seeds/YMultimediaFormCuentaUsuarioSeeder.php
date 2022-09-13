<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class YMultimediaFormCuentaUsuarioSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('multimedia_form_cuenta_usuario')->where('id_multimedia_form_cuenta_usuario >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_multimedia_form_cuenta_usuario' => null,
                'id_multimedia' => $i,
                'id_formulario_cuenta_usuario' => $i,
            ];
            $this->db->table('multimedia_form_cuenta_usuario')->insert($data);
        }
    }
}
