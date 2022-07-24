<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Datasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datasiswas')->insert([
            'nama'=> 'ahmad zidni rosadi',
            'jeniskelamin'=>'cowo',
            'notelpon' => '08587856788',
            'foto' => 'inifoto'

        ]);
    }
}
