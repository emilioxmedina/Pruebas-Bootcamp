<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test@test.com',
            'password' => Hash::make('test123')
        ]);

        DB::table('employees')->insert([
            'name' => 'empleado',
            'email' => 'empleado@test.com',
            'phone' => '1234567890',
            'salary' => '10000',
            'department' => 'IT',
            'designation' => 'Developer',
            'address' => 'Calle 123',
        ]);

        DB::table('customers')->insert([
            'name' => 'cliente',
            'email' => 'cliente@test.com',
            'phone' => '1234567890',
            'address' => 'Calle 123',
        ]);

        DB::table('equipment')->insert([
            'name' => 'equipo',
            'description' => 'equipo de prueba',
            'serial_number' => '1234567890',
            'model' => 'modelo de prueba',
            'manufacturer' => 'creador',
            'purchase_date' => '2021-10-10',
            'purchase_price' => '10000',
            'warranty_expiration_date' => '2025-10-10',
            'location' => 'Calle 123',
            'assigned_to' => 'empleado',
            'notes' => 'prueba',
        ]);
    }
}
