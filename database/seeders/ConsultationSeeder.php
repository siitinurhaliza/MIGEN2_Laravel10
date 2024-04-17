<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    public function run()
    {
        // create data here
        $consultation = [
            [
                'name' => 'Jantung Sesak', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ], 
            [
                'name' => 'Tekanan Darah Tinggi', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ], 
            [
                'name' => 'Gangguan Irama Jantung', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ], 
        ];
        // this array $consultation will be insert to table 'consultation'
        Consultation::insert($consultation);
    }
}
