<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)
            ->has(Gallery::factory(20))
            ->create();
    }
}
