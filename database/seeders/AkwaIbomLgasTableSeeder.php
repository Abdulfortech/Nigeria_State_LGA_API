<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkwaIbomLgasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Fetch the state ID for Akwa Ibom
        $stateId = DB::table('states')->where('name', 'Akwa Ibom')->pluck('id')->first();

        $lgas = [
            ['state_id' => $stateId, 'name' => 'Abak'],
            ['state_id' => $stateId, 'name' => 'Eastern Obolo'],
            ['state_id' => $stateId, 'name' => 'Eket'],
            ['state_id' => $stateId, 'name' => 'Esit Eket'],
            ['state_id' => $stateId, 'name' => 'Essien Udim'],
            ['state_id' => $stateId, 'name' => 'Etim Ekpo'],
            ['state_id' => $stateId, 'name' => 'Etinan'],
            ['state_id' => $stateId, 'name' => 'Ibesikpo Asutan'],
            ['state_id' => $stateId, 'name' => 'Ibiono Ibom'],
            ['state_id' => $stateId, 'name' => 'Ika'],
            ['state_id' => $stateId, 'name' => 'Ikono'],
            ['state_id' => $stateId, 'name' => 'Ikot Abasi'],
            ['state_id' => $stateId, 'name' => 'Ikot Ekpene'],
            ['state_id' => $stateId, 'name' => 'Ini'],
            ['state_id' => $stateId, 'name' => 'Itu'],
            ['state_id' => $stateId, 'name' => 'Mbo'],
            ['state_id' => $stateId, 'name' => 'Mkpat Enin'],
            ['state_id' => $stateId, 'name' => 'Nsit Atai'],
            ['state_id' => $stateId, 'name' => 'Nsit Ibom'],
            ['state_id' => $stateId, 'name' => 'Nsit Ubium'],
            ['state_id' => $stateId, 'name' => 'Obot Akara'],
            ['state_id' => $stateId, 'name' => 'Okobo'],
            ['state_id' => $stateId, 'name' => 'Onna'],
            ['state_id' => $stateId, 'name' => 'Oron'],
            ['state_id' => $stateId, 'name' => 'Oruk Anam'],
            ['state_id' => $stateId, 'name' => 'Uruan'],
            ['state_id' => $stateId, 'name' => 'Uyo']
        ];

        // Insert LGAs into the database
        DB::table('lgas')->insert($lgas);
    }
}
