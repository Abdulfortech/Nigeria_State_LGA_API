<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NigerianLgasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // Fetch the state IDs for the states
        $states = DB::table('states')->pluck('id', 'name')->toArray();

        $lgas = [
            // Abia State
            ['state_id' => $states['Abia'], 'name' => 'Aba North'],
            ['state_id' => $states['Abia'], 'name' => 'Aba South'],
            ['state_id' => $states['Abia'], 'name' => 'Arochukwu'],
            ['state_id' => $states['Abia'], 'name' => 'Bende'],
            ['state_id' => $states['Abia'], 'name' => 'Ikwuano'],
            ['state_id' => $states['Abia'], 'name' => 'Isiala Ngwa North'],
            ['state_id' => $states['Abia'], 'name' => 'Isiala Ngwa South'],
            ['state_id' => $states['Abia'], 'name' => 'Isuikwuato'],
            ['state_id' => $states['Abia'], 'name' => 'Obi Ngwa'],
            ['state_id' => $states['Abia'], 'name' => 'Ohafia'],
            ['state_id' => $states['Abia'], 'name' => 'Osisioma'],
            ['state_id' => $states['Abia'], 'name' => 'Ugwunagbo'],
            ['state_id' => $states['Abia'], 'name' => 'Ukwa East'],
            ['state_id' => $states['Abia'], 'name' => 'Ukwa West'],
            ['state_id' => $states['Abia'], 'name' => 'Umuahia North'],
            ['state_id' => $states['Abia'], 'name' => 'Umuahia South'],
            ['state_id' => $states['Abia'], 'name' => 'Umu Nneochi'],
            
            // Adamawa State
            ['state_id' => $states['Adamawa'], 'name' => 'Demsa'],
            ['state_id' => $states['Adamawa'], 'name' => 'Fufure'],
            ['state_id' => $states['Adamawa'], 'name' => 'Ganye'],
            ['state_id' => $states['Adamawa'], 'name' => 'Gayuk'],
            ['state_id' => $states['Adamawa'], 'name' => 'Gombi'],
            ['state_id' => $states['Adamawa'], 'name' => 'Guyuk'],
            ['state_id' => $states['Adamawa'], 'name' => 'Hong'],
            ['state_id' => $states['Adamawa'], 'name' => 'Jada'],
            ['state_id' => $states['Adamawa'], 'name' => 'Lamurde'],
            ['state_id' => $states['Adamawa'], 'name' => 'Madagali'],
            ['state_id' => $states['Adamawa'], 'name' => 'Maiha'],
            ['state_id' => $states['Adamawa'], 'name' => 'Mayo-Belwa'],
            ['state_id' => $states['Adamawa'], 'name' => 'Michika'],
            ['state_id' => $states['Adamawa'], 'name' => 'Mubi North'],
            ['state_id' => $states['Adamawa'], 'name' => 'Mubi South'],
            ['state_id' => $states['Adamawa'], 'name' => 'Numan'],
            ['state_id' => $states['Adamawa'], 'name' => 'Shelleng'],
            ['state_id' => $states['Adamawa'], 'name' => 'Song'],
            ['state_id' => $states['Adamawa'], 'name' => 'Toungo'],
            ['state_id' => $states['Adamawa'], 'name' => 'Yola North'],
            ['state_id' => $states['Adamawa'], 'name' => 'Yola South'],

            // Add other states and their LGAs here following the same pattern

            // Federal Capital Territory (FCT)
            ['state_id' => $states['Federal Capital Territory (FCT)'], 'name' => 'Abaji'],
            ['state_id' => $states['Federal Capital Territory (FCT)'], 'name' => 'Bwari'],
            ['state_id' => $states['Federal Capital Territory (FCT)'], 'name' => 'Gwagwalada'],
            ['state_id' => $states['Federal Capital Territory (FCT)'], 'name' => 'Kuje'],
            ['state_id' => $states['Federal Capital Territory (FCT)'], 'name' => 'Kwali'],
            ['state_id' => $states['Federal Capital Territory (FCT)'], 'name' => 'Municipal Area Council'],
        ];

        DB::table('lgas')->insert($lgas);
    }
}
