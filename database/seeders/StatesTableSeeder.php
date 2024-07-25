<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('states')->insert([
            'name' => 'Abia',
            'name' => 'Adamawa',
            'name' => 'Akwa Ibom',
            'name' => 'Anambra',
            'name' => 'Bauchi',
            'name' => 'Bayelsa',
            'name' => 'Benue',
            'name' => 'Borno',
            'name' => 'Cross River',
            'name' => 'Delta',
            'name' => 'Ebonyi',
            'name' => 'Edo',
            'name' => 'Ekiti',
            'name' => 'Enugu',
            'name' => 'Gombe',
            'name' => 'Imo',
            'name' => 'Jigawa',
            'name' => 'Kaduna',
            'name' => 'Kano',
            'name' => 'Katsina',
            'name' => 'Kebbi',
            'name' => 'Kogi',
            'name' => 'Kwara',
            'name' => 'Lagos',
            'name' => 'Nasarawa',
            'name' => 'Niger',
            'name' => 'Ogun',
            'name' => 'Ondo',
            'name' => 'Osun',
            'name' => 'Oyo',
            'name' => 'Plateau',
            'name' => 'Rivers',
            'name' => 'Sokoto',
            'name' => 'Taraba',
            'name' => 'Yobe',
            'name' => 'Zamfara',
            'name' => 'Federal Capital Territory (FCT)',
        ]);

    }
}
