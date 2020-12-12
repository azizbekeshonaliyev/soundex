<?php

namespace Database\Seeders;

use App\Models\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('customers')){
            $names = [
              'Azizbek',
              'Samandar',
              'Азизбек',
              'Самандар',
              'Mirkomil',
              'Dilmurod',
              'Дилмурод',
              'Bekzod',
              'Timur',
              'Тимур',
              'Alfred',
              'Iqboljon',
              'Murod',
              'Мурод',
            ];
            foreach ($names as $name){
                Customer::create([
                    'name' => $name,
                    'email' => 'customer@gmail.com',
                    'status' => 'Active',
                    'age' => rand(10,110),
                ]);
            }
        }
    }
}
