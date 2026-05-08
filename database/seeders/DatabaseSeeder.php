<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Recommendation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Paciente Demo',
            'email' => 'demo@cebra.test',
            'password' => bcrypt('password'),
        ]);

        $doctors = [
            ['name' => 'Dra. María López', 'specialty' => 'Genética', 'state' => 'CDMX', 'city' => 'Ciudad de México', 'contact' => 'Tel: 55-1234-5678'],
            ['name' => 'Dr. Carlos Ruiz', 'specialty' => 'Reumatología', 'state' => 'Jalisco', 'city' => 'Guadalajara', 'contact' => 'consultorio@ejemplo.com'],
            ['name' => 'Dra. Ana Torres', 'specialty' => 'Rehabilitación', 'state' => 'Nuevo León', 'city' => 'Monterrey', 'contact' => null],
        ];

        foreach ($doctors as $data) {
            $doctor = Doctor::create($data);

            Recommendation::create([
                'doctor_id' => $doctor->id,
                'user_id' => $user->id,
                'type' => 'diagnosis',
                'body' => "Excelente para diagnóstico inicial de EDS. Escucha al paciente.",
                'warning' => $doctor->name === 'Dr. Carlos Ruiz'
                    ? 'Tiempos de espera largos (3+ meses para cita).'
                    : null,
            ]);
        }
    }
}
