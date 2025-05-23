<?php

namespace Database\Seeders;

use App\Models\Accomodation;
use App\Models\Entertainment;
use App\Models\Food;
use App\Models\Place;
use App\Models\Shopping;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'phone' => '0123456789',
            'address' => '123 Admin St, Admin City',
            'is_admin' => true,
        ]);

        User::factory()->count(1000);
        Accomodation::factory()->count(1000);
        Entertainment::factory()->count(1000);
        Food::factory()->count(1000);
        Shopping::factory()->count(1000);
        Place::factory()->count(1000);
    }
}
