<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\xample;
use App\Models\Semester;
use Illuminate\Database\Seeder;
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

        User::create([
            'nim' => 'admin',
            'name' => 'admin',
            'slug' => fake()->slug(mt_rand(1,2)),
            'password' => Hash::make('admin'),
            'is_admin' => 1

        ]);
        User::factory(5)->create();
        Matkul::factory(6)->create();
        xample::factory(5)->create();
        Dosen::factory(15)->create();
        Semester::create([
            'semester' => "Ganjil",
        ]);
        Semester::create([
            'semester' => "Genap",
        ]);
    }
}
