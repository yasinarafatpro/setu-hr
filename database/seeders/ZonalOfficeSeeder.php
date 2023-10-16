<?php

namespace Database\Seeders;

use App\Models\ZonalOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ZonalOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index){
            ZonalOffice::create([
                'headoffice_id'=>100,
                'name'=>$faker->name,
                'address'=>$faker->word()
            ]);
        }
    }
}
