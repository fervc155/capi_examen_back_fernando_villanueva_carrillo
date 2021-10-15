<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(100)
            ->hasDomicilio(1)
            ->create();
    }
}
