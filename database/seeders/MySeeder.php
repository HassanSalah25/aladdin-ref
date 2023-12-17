<?php

namespace Database\Seeders;

use Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;

class MySeeder extends Seeder
{
    public function run(): void
    {
        $factory = new AdminFactory;
        $factor->create();
    }
}
