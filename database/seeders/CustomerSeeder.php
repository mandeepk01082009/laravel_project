<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker; // Faker is name given by us we can change it also.

class CustomerSeeder extends Seeder   
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run() 
    {
        $faker = Faker::create();
        for ($i=1; $i <= 20; $i++) { 
        $customer = new Customer;
        $customer->name = $faker->name;
        $customer->email = $faker->email;
        $customer->gender = "M";
        $customer->address = $faker->address;
        $customer->state = $faker->state;
        $customer->country = $faker->country;
        $customer->dob = $faker->date;
        $customer->password = $faker->password;
        $customer->save();
        }
        
    }
}
