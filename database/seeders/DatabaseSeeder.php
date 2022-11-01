<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void {
        User::factory()
            ->count(25)
            ->hasAddons(2)
            ->create();
        User::factory()
            ->count(13)
            ->hasAddons(3)
            ->create();
        User::factory()
            ->count(7)
            ->hasAddons(4)
            ->create();
    }
}
