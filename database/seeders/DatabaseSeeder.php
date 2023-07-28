<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'haidar',
            'name' => 'Hilmy Ahmad Haidar',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'is_admin' => 1,
        ]);

        // \App\Models\User::factory()->create([
        //     'username' => 'azzah',
        //     'name' => 'Azzah Fathimah',
        //     'email' => 'azzah@admin.com',
        //     'password' => bcrypt('admin123'),
        // ]);

        \App\Models\Category::create([
            'nama' => 'Kuliner',
            'user_id' => 1,
        ]);
        \App\Models\Category::create([
            'nama' => 'Alam',
            'user_id' => 1,
        ]);
        \App\Models\Category::create([
            'nama' => 'Cafe',
            'user_id' => 1,
        ]);

        // \App\Models\Destinasi::factory(10)->create();
    }
}
