<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CInscripcionesCursosSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('inscripciones_cursos')->where('id_inscripcion_curso >=', 1)->delete();
        for ($i = 1; $i <= 10; $i++) {
            $data = [
                'id_inscripcion_curso' => null,
                'fecha_ini' => date('Y-m-d'),
                'fecha_fin' => date('Y-m-d'),
                'celular' => $i > 9 ? '00000000' : $i . $i . $i . $i . $i . $i . $i . $i,
                'email' => 'CursoDocente' . $i . '@gmail.com',
                'id_curso' => $i,
                'id_persona' => $i,
            ];
            $this->db->table('inscripciones_cursos')->insert($data);
        }
        // Using Query Builder
    }
}
