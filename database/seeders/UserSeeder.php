<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Provider\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Role::all() as $role) {
            $user = User::query()
                ->create([
                    'id' => Uuid::uuid(),
                    'name' => $role['name'],
                    'slug' => Str::slug($role['name']),
                    'email' => str_replace(' ', '', $role['name']) . "@gmail.com",
                    'email_verified_at' => now(),
                    'password' => bcrypt('password'),
                ]);

            $user->assignRole($role);
        }
    }
}
