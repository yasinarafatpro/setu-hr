<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,50) as $index){
            Employees::create([
                'emp_id'=>$faker->numberBetween(1,100),
                'name'=>$faker->name,
                'email'=>$faker->email(),
                'phone_number'=>$faker->phoneNumber(),
                'designation'=>$faker->word(),
                'branch_name'=>$faker->word(),
                'status'=>$faker->randomElement([0,1])
            ]);
        }
    }
}
