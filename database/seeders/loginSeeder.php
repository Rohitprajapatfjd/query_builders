<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\login;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/admin.json');
        $admin = collect(json_decode($json));

        $admin->each(function($val){
            admin::create([
                'name'=>$val->name,
                'email'=> $val->email,
                'city'=> $val->city,
            ]);
        });
    }
}
