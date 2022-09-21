<?php

namespace Database\Seeders;

use App\Models\Skuter;
use Illuminate\Database\Seeder;

class SkuterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skuter::create([
            "model"=>"Icon S",
            "boja"=>"siva",
            "materijal"=>"aluminijum",
            "stanje"=>"novi",
            "cena"=>"55",
            "brzina"=>"40 km/h",
            "snaga"=>"250W"
        ]);

        Skuter::create([
            "model"=>"Chopper Dogebos M1",
            "boja"=>"crna",
            "materijal"=>"aluminijum",
            "stanje"=>"novo",
            "cena"=>"80",
            "brzina"=>"50 km/h",
            "snaga"=>"500W"
        ]);
    }
}
