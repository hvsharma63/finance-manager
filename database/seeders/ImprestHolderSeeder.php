<?php

namespace Database\Seeders;

use App\Models\ImprestHolder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImprestHolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImprestHolder::factory(20)->create();
    }
}
