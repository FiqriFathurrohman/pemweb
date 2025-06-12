<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat user admin
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        // 2. Buat role 'super_admin' jika belum ada
        $role = Role::firstOrCreate(['name' => 'super_admin']);

        // 3. Berikan role ke user
        $user->assignRole($role);

        // 4. Jalankan seeder tambahan
        $this->call([
            BeasiswaSeeder::class,
            PenerimaBeasiswaSeeder::class,
            SeoSeeder::class, // ✅ tambahkan ini
        ]);
    }
}
