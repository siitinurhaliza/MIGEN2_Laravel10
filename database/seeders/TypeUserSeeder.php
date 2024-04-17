<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\TypeUser;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    public function run()
    {
        // Create data here
        $type_user = [
            [
                'name' => 'Admin', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ], 
            [
                'name' => 'Dokter', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ], 
            [
                'name' => 'Pasien', 
                'created_at' => now(), 
                'updated_at' => now(), 
            ], 
        ];
        // This array $type_user will be insert to table 'type_user'
        TypeUser::insert($type_user);
    }
}
