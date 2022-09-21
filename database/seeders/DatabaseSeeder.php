<?php

namespace Database\Seeders;
use App\Models\Skuter;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Skuter::truncate();
        Rezervacija::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
       $s= Skuter::create([
            "model"=>"Segway",
            "boja"=>"plavi",
            "materijal"=>"aluminijum",
            "stanje"=>"polovno",
            "cena"=>"10",
            "brzina"=>"20 km/h",
            "snaga"=>"250W"
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_preuzimanja"=>"2021-01-01",
            "brDana"=>"3",
            "kontakt"=> "063111111",
            "skuter_id"=> $s->id,
            "user_id"=> $user->id,
        ]);
    }
}
