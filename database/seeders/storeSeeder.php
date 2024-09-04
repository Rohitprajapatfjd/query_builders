<?php

namespace Database\Seeders;

use App\Models\store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class storeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        store::factory(10)->create();        
    }
}
